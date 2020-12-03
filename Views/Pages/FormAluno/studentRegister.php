<?php
    include_once('../../../connection.php');
    include_once('../../../barcode.inc.php');

    if(empty($_POST["nome"]) || empty($_POST["ano"]) || empty($_POST["prontuario"]) || empty($_POST["turma"])){
        echo "Por favor, preencha todos os dados corretamente";
        die();
    }

    $pasta = "";
    $nome = $_POST["nome"];
    $ano = $_POST["ano"];
    $prontuario = $_POST["prontuario"];
    $turma = $_POST["turma"];
    $codigo = $prontuario.'00'.$ano;

    $aluno = [$prontuario, $nome, $ano, $codigo, $turma];

    switch($ano) {
        case 1:
            $pasta = "ano1";
        break;
        case 2:
            $pasta = "ano2";
        break;
        case 3:
            $pasta = "ano3";
        break;
        case 4:
            $pasta = "ano4";
        break;
    }

    try{
        $sql = $pdo->prepare("INSERT INTO alunos (prontuario, nome, ano, codigo, turma) VALUES (?,?,?,?,?)");
        $sql->execute($aluno);


        new barCodeGenerator($codigo,1,"../../assets/img/barcodes/$pasta/$prontuario-00$ano.gif", 140, 145, true);

        echo "
            <img
                src='http://localhost/TCC/Views/assets/img/barcodes/$pasta/$prontuario-00$ano.gif'
                alt='Codigo aluno: $nome - $prontuario'
            />
        ";

        die();
    }catch(PDOException $e){
        echo json_encode("Erro ao inserir.\r\nAluno já cadastrado.");

        die();
    }
?>