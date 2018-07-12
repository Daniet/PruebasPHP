<?php namespace Views;

  /**
   *
   */

  class Template{

    function __construct(){
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo URL ?>/Views/templates/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>/Views/templates/css/app.css">
    <title></title>
  </head>
  <body>
<?php
    }

    function __destruct(){
?>
  <script src="<?php echo URL ?>/Views/templates/script/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="<?php echo URL ?>/Views/templates/script/bootstrap.min.js" charset="utf-8"></script>
  <script src="<?php echo URL ?>/Views/templates/script/app.js" charset="utf-8"></script>
  </body>
</html>
<?php
    }

  }

  $template = new Template();


?>
