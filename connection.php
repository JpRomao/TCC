<?php
    define('DATABASE',array('HOST'=>'https://databases-auth.000webhost.com/','DB'=>'id15626848_ifbooks','USER'=>'id15626848_edujoanat21','PASSWORD'=>'gZuG9R)Yq^k7wB6$'));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        //$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //DEV MODE
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>