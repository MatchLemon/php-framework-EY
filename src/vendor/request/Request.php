<?php
namespace request;
class Request {
    public $controller = '';
    public $method = '';
    public $index = "";

    public function init(){
        $partUrl = $_SERVER['PHP_SELF'];
        if (!empty($partUrl)) {
           // var_dump($partUrl);
            var_dump($_SERVER['REQUEST_URI']);
            return ["ss"=>222];
            // list($index, $controller, $method) = explode(DIRECTORY_SEPARATOR, $partUrl);
            // $this->index = $index;
            // $this->controller = $controller;
            // $this->method = $method;
        }

        //var_dump($partUrl);
    }
}


 ?>