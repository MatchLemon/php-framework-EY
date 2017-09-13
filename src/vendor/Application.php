<?php
  /**
  *
  */
use router\RouterManage;
use request\Request;
class Application {
    public function run(){
        try {
            EY::$request = new Request();
            EY::$request->init();
            EY::$router = new RouterManage();
            //EY::$router->init();
        } catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

    }
}
 ?>