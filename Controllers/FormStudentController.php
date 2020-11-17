<?php
    namespace Controllers;

    class FormStudentController extends Controller{
        public function __construct(){
            $this->view = new \Views\View('FormAluno/formStudent');
        }

        public function execute(){
            $this->view->render(array('titulo'=>'Cadastro aluno',
                                      'pageCss'=>(array(INCLUDE_PATH_VIEWS.'Pages/FormAluno/formStudent'))));
        }
    }
?>