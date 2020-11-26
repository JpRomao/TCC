<?php
    session_start();

    include_once("../../../adminConnection.php");

    if(isset($_POST["action"])){
        $user = array($_POST["login"]);
        $password = $_POST["password"];
    }
    else {
        die();
    }

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE user = ?");
    $sql->execute($user);

    if($sql->rowCount() == 1){
        $info = $sql->fetch();

        if($password === $info['senha']){
            $_SESSION['admin'] = true;
            $_SESSION['id'] = $info['id'];
            $_SESSION['user'] = $info['user'];
        }
    }
    $adminPage = "http://localhost/TCC/Admin";
    header("Location: ".$adminPage);
    die();
?>