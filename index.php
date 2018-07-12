<?php session_start();

  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', realpath(dirname(__FILE__)). DS);

  if($_SERVER['HTTPS']){
    define('URL', 'https://'. $_SERVER['HTTP_HOST']);
  }else{
    define('URL', 'http://'. $_SERVER['HTTP_HOST']);
  }

  require_once 'Config/Autoload.php';
  Config\Autoload::run();
  Config\Router::run(new Config\Request());

?>
