<?php
    session_start();

    include_once("../../connection.php");

    if(isset($_POST["action"])){
        $user = array($_POST["login"]);
        $password = $_POST["password"];
    }
    else {
        echo "<h1>Página movida permanentemente</h1>";
        die();
    }

    $sql = $pdo->prepare("SELECT * FROM administradores WHERE login = ?");
    $sql->execute($user);
    echo "select";

    if($sql->rowCount() === 1){
        echo "<br/>select bem sucedido";
        $info = $sql->fetch();

        if($password === $info['senha']){
            echo "<br/>senha";
            $_SESSION['admin'] = true;
            $_SESSION['id'] = $info['id'];
            $_SESSION['user'] = $info['user'];
        }
    }

    header("Location: https://ifbookst.herokuapp.com/");
    die();
?>