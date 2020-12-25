<?php
    define('DATABASE',array('HOST'=>'localhost','DB'=>'mydb','USER'=>'myuser','PASSWORD'=>'mypassword'));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";port=3306;dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD']);
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>