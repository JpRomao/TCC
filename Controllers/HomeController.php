<?php
    namespace Controllers;
    define('HTML','<h2>Entrega e Devolução de Livros</h2>');

    class HomeController{        
        public function __construct(){
            echo "construct";
            if(file_exists("../Views/View.php")){
                echo "oieeee";
            }
        }

        public function execute(){
//             $view->render(array('titulo'=>'Home',
//                                      'pageCss'=>(array('https://ifbookst.herokuapp.com/Views/Pages/Home/home',
//                                                         'https://ifbookst.herokuapp.com/Views/Pages/Home/menu')),
//                                       'html'=>'<h1>oi</h1>'));
        }
    }
$controller = new HomeController();
?>
