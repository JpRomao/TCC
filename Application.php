<?php
define('INCLUDE_PATH_ROOT', 'http://localhost/TCC/');
define('INCLUDE_PATH_VIEWS', 'http://localhost/TCC/Views/');
    class Application{
        public function execute(){
            echo 'Chega em Application<br>';
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            
            $url = ucfirst($url);
            $url .= "Controller";
            
            if(file_exists('Controllers/'.$url.'.php')){
                echo "oi";
                $className = 'Controllers/'.$url;
                require_once $className.'.php';
                $controller = new $className;
                var_dump($controller);
                $controller->execute();
            }
            else{
                die("<h1>Página inexistente!</h1>");
            }
        }
    }
?>
