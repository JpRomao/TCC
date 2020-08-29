<?php
    namespace Controllers;

    class ContatoController extends Controller{
        public function __construct(){
            $this->view = new \Views\View('Contato/contato');
        }

        public function execute(){
            $this->view->render(array('titulo'=>'Contato'));
        }
    }
?>