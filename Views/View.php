<?php
    namespace Views;

    class View{
        private $fileName;
        private $header;
        private $footer;

        public function __construct($fileName,$header='header',$footer='footer'){
            $this->fileName = $fileName;
            $this->header = $header;
            $this->footer = $footer;
        }

        public function render($array=[]){
            require('Pages/templates/'.$this->header.'.php'); //header
            require('Pages/'.$this->fileName.'.php'); //main
            require('Pages/templates/'.$this->footer.'.php'); //footer
        }
    }
?>