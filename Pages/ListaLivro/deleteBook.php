<?php
  session_start();

  if(!isset($_SESSION['admin']) && !$_SESSION["admin"]){
    echo "<h1>Página movida permanentemente!</h1>";
    die();
  }

  include_once("../../connection.php");

  if(!isset($_POST["materia"]) || !isset($_POST["ano"])){
    die();
  }

  $materia = $_POST["materia"];
  $ano = $_POST["ano"];

  $livro = [$materia, $ano];

  try{
    $sql = $pdo->prepare("DELETE FROM livros WHERE materia = ? AND ano = ?");
    $sql->execute($livro);

    if($sql->rowCount() === 1){
      echo "Livro de $materia do $ano"."° ano excluído.";
    }
    else{
      echo "Ocorreu um erro na exclusão do livro.";
    }
  }catch(PDOException $e){
    echo json_encode($e->getMessage());
  }