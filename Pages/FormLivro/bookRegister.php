<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        echo "<h1>Página movida permanentemente</h1>";
        die();
    }

    include_once('../../connection.php');

    $materia = $_POST["materia"];
    $ano = $_POST["ano"];
    $quantidade = $_POST["quantidade"];

    if($materia=='' || $ano=='' || $quantidade==''){
        die();
    }

    $livro = [$materia, $ano, $quantidade];

    try{
        $sql = "SELECT * FROM livros WHERE materia='$materia' AND ano='$ano'";
        $i = 0;

        foreach($pdo->query($sql) as $row){
            $i++;
        }

        if($i>0){
            $data = [$quantidade, $materia, $ano];

            $sql = $pdo->prepare("UPDATE livros SET estoque = (estoque - ?) WHERE materia = ? AND ano = ?");
            $sql->execute($data);
        }
        else{
            $sql = $pdo->prepare("INSERT INTO livros (materia, ano, estoque) VALUES (?,?,?)");
            $sql->execute($livro);

            echo json_encode(1);
            die();
        }
    }catch(PDOException $e){
        echo "Livro já inserido.";
        die();
    }
?>