<?php
    include_once('../../../connection.php');

    $nome = $_POST["nome"];
    $ano = $_POST["ano"];
    $prontuario = $_POST["prontuario"];

    $aluno = [$prontuario, $nome, $ano];

    try{
        $sql = $pdo->prepare("INSERT INTO alunos (prontuario, nome, ano) VALUES (?,?,?)");
        $sql->execute($aluno);
        echo json_encode(1);
        die();
    }catch(PDOException $e){
        echo json_encode("Erro ao inserir.\r\nAluno já cadastrado.");
        die();
    }
?>