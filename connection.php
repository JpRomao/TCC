<?php'edujoanat21
    define('DATABASE',array('HOST'=>'ifbooks','DB'=>'ifbooks','USER'=>'root','PASSWORD'=>''));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";port=3306;dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>
