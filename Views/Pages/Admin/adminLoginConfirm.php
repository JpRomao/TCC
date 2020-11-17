<?php
    session_start();

    include_once("../../../adminConnection.php");

    if(isset($_POST["action"])){
        $user = $_POST["user"];
        $password = $_POST["password"];
    }

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE user = ?");
    $sql->execute($user);

    if($sql->rowCount() == 1){
        $info = $sql->fetch();
        if(password_verify($password, $info['senha'])){
            $_SESSION['login'] = true;
            $_SESSION['id'] = $info['id'];
            $_SESSION['user'] = $info['user'];
        }
    }
?>