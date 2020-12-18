<?php
    class Application{
        public function execute(){
            echo 'Chega em Application<br>';
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            
            $url = ucfirst($url);
            $url .= "Controller";
            
            if(file_exists('Controllers/'.$url.'.php')){
                $className = 'Controllers/'.$url;
                include_once $className.'.php';
                $newClass = 'Controllers\\'.$url;
                $controller = new $newClass;
                $controller->execute();
            }
            else{
                die("<h1>Página inexistente!</h1>");
            }
        }
    }
?>
