<?php
    $autoload = function(){
        require_once('Application.php');
    };

    spl_autoload_register($autoload);

    $application->execute();
?>
