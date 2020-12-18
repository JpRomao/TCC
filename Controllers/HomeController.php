<?php
    namespace Controllers;
    define('HTML','<h2>Entrega e Devolução de Livros</h2>');

    class HomeController{        
        public function __construct(){
            echo "construct";
            include("../Views/View.php");
            var_dump($view);
        }

        public function execute(){
            var_dump($view);
//             $view->render(array('titulo'=>'Home',
//                                      'pageCss'=>(array(INCLUDE_PATH_VIEWS.'Pages/Home/home',
//                                                         INCLUDE_PATH_VIEWS.'Pages/Home/menu')),
//                                       'html'=>HTML));
        }
    }
$controller = new HomeController();
?>
