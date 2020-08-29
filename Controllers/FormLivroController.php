<?php
    namespace Controllers;

    class FormLivroController extends Controller{
        public function __construct(){
            $this->view = new \Views\View('FormLivro/formLivro');
        }

        public function execute(){
            $this->view->render(array('titulo'=>'Cadastro livro',
                                      'pageCss'=>(array(INCLUDE_PATH_VIEWS.'Pages/FormLivro/formLivro'))));
        }
    }
?>