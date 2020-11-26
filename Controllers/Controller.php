<?php
    namespace Controllers;

    abstract class Controller{
        private $view;

        abstract function execute();
    }
?>