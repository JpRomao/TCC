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

    if($sql->rowCount() === 1){
        $info = $sql->fetch();

        if($password === $info['senha']){
            $_SESSION['admin'] = true;
            $_SESSION['id'] = $info['id'];
            $_SESSION['user'] = $info['user'];
        }
    }

    header("Location: https://ifbookst.herokuapp.com/Pages/Admin/");
    die();
?>