<?php
    define('INCLUDE_PATH_ROOT', 'http://localhost/TCC/');
    define('INCLUDE_PATH_VIEWS', 'http://localhost/TCC/Views/');
    class Application{
        public function execute(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

            $url = ucfirst($url);
            $url .= "Controller";

            if(file_exists('./Controllers/'.$url.'.php')){
                $className = './Controllers/'.$url.'.php';                
                require_once($className);
//                 $controller = new $className;
//                 $controller->execute();
            }
            else{
                die("<h1>Página inexistente!</h1>");
            }
        }
    }
?>
