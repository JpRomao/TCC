<?php
    namespace Controllers;

    class ListaAlunoController extends Controller{
        public function __construct(){
            $this->view = new \Views\View('ListaAluno/listStudent');
        }

        public function execute(){
            $this->view->render(array('titulo'=>'Listar aluno',
                                      'pageCss'=>(array(INCLUDE_PATH_VIEWS.'Pages/ListaAluno/listStudent'))));
        }
    }
?>