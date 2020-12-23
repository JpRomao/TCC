<?php
    define('DATABASE',array('HOST'=>'db4free.net','DB'=>'ifbooks','USER'=>'edujoanat21','PASSWORD'=>'gZuG9R)Yq^k7wB6$'));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";port=3306;dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>