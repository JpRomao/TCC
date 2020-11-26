<?php
    namespace Controllers;

    class AdminController extends Controller{
        public function __construct(){
            $this->view = new \Views\View('Admin/admin');
        }

        public function execute(){
            $this->view->render(array('titulo'=>'Admin',
                                      'pageCss'=>(array(INCLUDE_PATH_VIEWS.'Pages/Admin/admin'))
            ));
        }
    }
?>