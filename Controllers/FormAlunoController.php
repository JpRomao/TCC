<?php
    namespace Controllers;

    class FormAlunoController extends Controller{
        public function __construct(){
            $this->view = new \Views\View('FormAluno/formAluno');
        }

        public function execute(){
            $this->view->render(array('titulo'=>'Cadastro aluno',
                                      'pageCss'=>(array(INCLUDE_PATH_VIEWS.'Pages/FormAluno/formAluno'))));
        }
    }
?>