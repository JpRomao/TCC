<?php
    namespace Controllers;

    abstract class Controller{
        private $view;
        private $model;

        abstract function execute();
    }
?>