<?php
    define("HOST","localhost");
    define("DB","ifbooks");
    define("USER","root");
    define("PASSWORD","");

    try{
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        //$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //DEV MODE
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>