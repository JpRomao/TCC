<?php
  session_start();

  if(!isset($_SESSION['admin']) && !$_SESSION["admin"]){
    echo "<h1>Página movida permanentemente</h1>";
    die();
  }

  include_once("../../connection.php");

  $prontuario = $_POST["prontuario"];
  $nome = $_POST["nome"];
  $ano = $_POST["ano"];
  $codigo = $_POST["codigo"];

  $data = [$prontuario, $nome, $ano, $codigo, $prontuario];

  try{
    $sql = $pdo->prepare("UPDATE alunos SET prontuario = ?, nome = ?, ano = ?, codigo = ? WHERE prontuario = ?");
    $sql->execute($data);

    if($sql->rowCount() === 1){
      echo "Dados atualizados com sucesso";
    }
    else {
      echo "Prontuário ou código já existente.";
    }
  }catch(PDOException $e){
    echo $e->getMessage();
  }