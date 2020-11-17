<?php
    define('DATABASE',array('HOST'=>'localhost','DB'=>'ifbooks_admin','USER'=>'root','PASSWORD'=>''));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //DEV MODE
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>