<?php
    define('DATABASE',array('HOST'=>'db4free.net', 'PORT'=>'3306', 'DB'=>'ifbooks', 'USER'=>'edujoanat', 'PASSWORD'=>'gZuG9R)Yq^k7wB6$'));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";port=".DATABASE['PORT'].";dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD']);
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>
