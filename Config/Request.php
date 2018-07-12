<?php namespace Config;

  /**
   *
   */
  class Request{

    private $controller;
    private $method;
    private $args;

    function __construct(){

      if(isset($_SERVER['PHP_SELF'])){
        $route = $_SERVER['PHP_SELF'];
        $route = \str_replace('/index.php/', '', $route);
        $route = \explode('/', $route);

        $this->controller = $route[0];
        array_shift($route);
        $this->method = $route[0];
        array_shift($route);

        if(!$this->method){
          $this->method = 'index';
        }
        $this->args = $route;
      }

    }

    public function getController(){
      return $this->controller;
    }

    public function getMethod(){
      return $this->method;
    }

    public function getArgs(){
      return $this->args;
    }
  }


?>
