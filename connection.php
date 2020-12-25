<?php
    define('DATABASE',array('HOST'=>'localhost','DB'=>'ifbooks','USER'=>'root','PASSWORD'=>''));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD']);
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>