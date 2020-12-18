<?php
    define('INCLUDE_PATH_ROOT', __DIR__.'/TCC/');
    define('INCLUDE_PATH_VIEWS', __DIR__.'/Views/');
    class Application{
        public function execute(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

            $url = ucfirst($url);
            $url .= "Controller";

            if(file_exists('./Controllers/'.$url.'.php')){
                $className = './Controllers/'.$url.'.php';                
                $controller = new $className;
                $controller->execute();
            }
            else{
                die("<h1>Página inexistente!</h1>");
            }
        }
    }
?>
