<?php
    session_start();

    if(!isset($_SESSION['admin']) && $_SESSION["admin"]){
        echo "<h1>Página movida permanentemente</h1>";
        die();
    }

    include_once('../../connection.php');
    include_once('../../barcode.inc.php');

    if(empty($_POST["nome"])
        || empty($_POST["sobrenome"])
        || empty($_POST["ano"])
        || empty($_POST["prontuario"])
        || empty($_POST["turma"]))
    {
        echo "Por favor, preencha todos os dados corretamente";
        die();
    }

    $pasta = "";
    $nome = "a";
    $sobrenome = "s";
    $ano = "1";
    $prontuario = "123";
    $turma = "informática";
    $codigo = $prontuario.'00'.$ano;
    $livrosFaltando = [];

    $deixarAlunoSemLivro = false;

    if(isset($_POST["continuar"])){
        $deixarAlunoSemLivro = $_POST["continuar"];
    }

    $nome = $nome.' '.$sobrenome;

    $livros = ["Português", "Matemática", "Física", "Sociologia", "Filosofia", "História"];

    switch($ano) {
        case 1:
            $pasta = "ano1";

            array_push($livros, "Inglês");

            if($turma=="Mecânica"){
                array_push($livros, "Química");
            }
            else if($turma=="Informática"){
                array_push($livros, "Artes");
            }
        break;
        case 2:
            $pasta = "ano2";

            array_push($livros, "Geografia", "Inglês", "Biologia", "Química");

            if($turma=="Informática"){
                array_push($livros, "Artes");
            }
        break;
        case 3:
            $pasta = "ano3";

            array_push($livros, "Geografia", "Inglês", "Biologia", "Química");

            if($turma=="Mecânica"){
                array_push($livros, "Artes");
            }
        break;
        case 4:
            $pasta = "ano4";

            array_push($livros, "Geografia", "Biologia");

            if($turma=="Mecânica"){
                array_push($livros, "Artes");
            }
            else if($turma=="Informática"){
                array_push($livros, "Química");
            }
        break;
    }

    try{
        foreach($livros as $livro){
            $data = [$livro, $ano];

            $sql = $pdo->prepare("SELECT livros.estoque FROM livros WHERE materia = ? AND ano = ?");
            $sql->execute($data);

            $quantidadeEstoque = $sql->fetch();

            if($quantidadeEstoque["estoque"]<=0){
                array_push($livrosFaltando, $livro);
            }
        }

        if(count($livrosFaltando)>0){
            echo "Faltam livros de: <br/>";
            echo "<ul>";
                foreach($livrosFaltando as $livroFaltando){
                    echo "<li>$livroFaltando</li>";
                }
            echo "</ul>";
            if($deixarAlunoSemLivro=="false" || $deixarAlunoSemLivro == "undefined"){
                echo "<input type='checkbox' name='continuar'/> Continuar assim mesmo?";
                die();
            }
        }

        $i=0;

        foreach($livros as $livro){
            $data = [$livro, $ano];

            $sql = $pdo->prepare("SELECT livros.estoque FROM livros WHERE materia = ? AND ano = ?");
            $sql->execute($data);

            $quantidadeEstoque = $sql->fetch();

            if($quantidadeEstoque["estoque"]>0){
                $sql = $pdo->prepare("UPDATE livros SET despachado = (despachado + 1), estoque = (estoque - 1) WHERE materia = ? AND ano = ?");
                $sql->execute($data);
            }
        }

        new barCodeGenerator($codigo, 1, "../../assets/img/barcodes/$pasta/$prontuario-00$ano.gif", 140, 145, true);

        echo
        "
            <img
                src='../../assets/img/barcodes/$pasta/$prontuario-00$ano.gif'
                alt='codigo de barra: $codigo'
            />
        ";

        $livros = "";

        foreach($livrosFaltando as $livroFaltando){
            $livros .= "$livroFaltando,";
        }

        $aluno = [$prontuario, $nome, $ano, $codigo, $turma, $livrosFaltando];

        $sql = $pdo->prepare("INSERT INTO alunos (prontuario, nome, ano, codigo, turma, livros_faltando) VALUES (?,?,?,?,?,?)");
        $sql->execute($aluno);

        die();
    }catch(PDOException $e){
        echo $e->getMessage();
        die();
    }
?>