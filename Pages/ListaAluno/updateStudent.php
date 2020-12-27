<?php
  session_start();

  header("Content-Type: application/json");

  if(!isset($_SESSION['admin']) && !$_SESSION["admin"]){
    echo "<h1>Página movida permanentemente!</h1>";
    die();
  }

  include_once("../../connection.php");

  $prontuario = $_POST["prontuario"];
  $prontuarioAntigo = $_POST["prontuarioAntigo"];
  $nome = $_POST["nome"];
  $ano = $_POST["ano"];
  $codigo = $prontuario.'00'.$ano;

  $data = [$prontuario, $nome, $ano, $codigo, $prontuarioAntigo];

  try{
    $sql = $pdo->prepare("UPDATE alunos SET prontuario = ?, nome = ?, ano = ?, codigo = ? WHERE prontuario = ?");
    $sql->execute($data);
    

    if($sql->rowCount() === 1){
      $data = [
        "message"=>"Dados atualizados com sucesso!",
        "dados"=>$data
      ];

      echo json_encode($data);
    }
    else {
      $data = [
        "message"=>"Prontuário já existente."
      ];
      
      echo json_encode($data);
    }
  }catch(PDOException $e){
    echo $e->getMessage();
  }