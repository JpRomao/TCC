<?php
    $autoload = function($class){
        echo $class;
        require($class.'.php');
    };

    spl_autoload_register($autoload);

    $app = new Application();
    $app->execute();
?>
