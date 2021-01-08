<?php
    define('DATABASE',array('HOST'=>'sql10.freesqldatabase.com',
                            'PORT'=>'3306', 'DB'=>'sql10385828',
                            'USER'=>'sql10385828',
                            'PASSWORD'=>'phWv5KYZRD'));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";port=".DATABASE['PORT'].";dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD']);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
