<?php namespace Config;

  /**
   *
   */
  class Autoload{

    // function __construct(){
    //   // code...
    // }

    public static function run(){
      spl_autoload_register(function($class){
        $route = str_replace('\\', '/', $class) . '.php';
        // echo "<p>$route</p>";
        if(is_readable($route)){
          require_once $route;
        }else{
          echo 'El archivo no existe';
        }
      });
    }

  }

?>
