<?php
    define('DATABASE',array('HOST'=>'localhost', 'PORT'=>'3306', 'DB'=>'ifbooks', 'USER'=>'root', 'PASSWORD'=>''));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";port=".DATABASE['PORT'].";dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD']);
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>
