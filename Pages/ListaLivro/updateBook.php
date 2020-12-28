<?php
  session_start();

  header("Content-Type: application/json");

  if(!isset($_SESSION['admin']) && !$_SESSION["admin"]){
    echo "<h1>Página movida permanentemente!</h1>";
    die();
  }

  include_once("../../connection.php");

  $materia = $_POST["materia"];
  $ano = $_POST["ano"];
  $estoque = $_POST["estoque"];
  $despachado = $_POST["despachado"];
  $anoAntigo = $_POST["anoAntigo"];
  $materiaAntiga = $_POST["materiaAntiga"];

  $livro = [$materia, $ano, $despachado, $estoque, $materiaAntiga, $anoAntigo];

  try{
    $sql = $pdo->prepare("UPDATE livros SET materia = ?, ano = ?, despachado = ?, estoque = ? WHERE materia = ? AND ano = ?");
    $sql->execute($livro);
    
    $data = ["dados"=>$livro];

    if($sql->rowCount() === 1){
      $data["message"] = "Dados atualizados com sucesso!";

      echo json_encode($data);
    }
    else {
      $data["message"] = "Livro já existente.";

      echo json_encode($data);
    }
  }catch(PDOException $e){
    echo json_encode($e->getMessage());
  }