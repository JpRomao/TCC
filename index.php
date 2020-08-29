<?php
    $autoload = function($class){
        require($class.'.php');
    };

    spl_autoload_register($autoload);

    $app = new Application();
    $app->execute();
?>