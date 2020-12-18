<?php
    namespace Controllers;
    define('HTML','<h2>Entrega e Devolução de Livros</h2>');

    class HomeController{        
        public function __construct(){
            echo "construct";
            if(file_exists("../Views/View.php"){
                echo "oieeee";
            }
            include("");

        }

        public function execute(){
//             $view->render(array('titulo'=>'Home',
//                                      'pageCss'=>(array(INCLUDE_PATH_VIEWS.'Pages/Home/home',
//                                                         INCLUDE_PATH_VIEWS.'Pages/Home/menu')),
//                                       'html'=>HTML));
        }
    }
$controller = new HomeController();
?>
