<?php
  session_start();

  if(!isset($_SESSION['admin']) && !$_SESSION["admin"]){
    echo "<h1>Página movida permanentemente!</h1>";
    die();
  }

  include_once("../../connection.php");

  if(!isset($_POST["prontuario"])){
    die();
  }

  $prontuario = $_POST["prontuario"];

  try{
    $sql = $pdo->prepare("DELETE FROM alunos WHERE prontuario = ?");
    $sql->execute([$prontuario]);

    if($sql->rowCount() === 1){
      echo "Aluno de prontuario: $prontuario excluído.";
    }
    else{
      echo "Ocorreu um erro na exclusão do aluno.";
    }
  }catch(PDOException $e){
    echo $e->getMessage();
  }