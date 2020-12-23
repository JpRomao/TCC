<?php
    define('DATABASE',array('HOST'=>'localhost','DB'=>'id15626848_ifbooks','USER'=>'id15626848_edujoanat21','PASSWORD'=>'gZuG9R)Yq^k7wB6$'));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";port=3306;dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD']);
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>