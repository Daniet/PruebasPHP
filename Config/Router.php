<?php namespace Config;

/**
 *
 */
class Router{

  // function __construct(argument)
  // {
  //   // code...
  // }

  public static function run(Request $requets){
    $controller = $requets->getController(). 'Controller';

    $route = ROOT. 'Controllers'. DS. $controller. '.php';
    $method = $requets->getMethod();
    $args = $requets->getArgs();

    // print_r($route);

    if(\is_readable($route)){
      require_once $route;
      $show = 'Controllers\\'. $controller;
      // print_r($route);
      $controller = new $show;
      if(!isset($args)){
        $data = \call_user_func(array($controller, $method));
      }else{
        $data = \call_user_func_array(array($controller, $method), $args);
      }

    }

    $route = ROOT. 'Views'. DS. $requets->getController(). DS. $requets->getMethod(). '.php';
    if(\is_readable($route)){
      require_once($route);
      require_once 'Views/template.php';
    }else{
      print_r(json_encode($data));
    }
  }

}


?>
