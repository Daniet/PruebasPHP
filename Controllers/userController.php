<?php namespace Controllers;

  /**
   *
   */
  use Models\Log as Log;
  use Models\User as User;

  class userController{

    private $user;
    private $log;

    public function __construct(){
      $this->user = new User();
      $this->log = new Log();
    }

    public function index(){
      // $data = $this->user->list();
      return [];
    }

    public function status(){
      if($_SESSION['user']){
        return array(
          'status' => true
        );
      }else{
        return array(
          'status' => false
        );
      }
    }

    public function login(){
      $data = $this->user->login($_POST['user'], $_POST['pass']);
      if(count($data) == 1){

        $_SESSION['user'] = $data[0]['ID_USER'];
        $this->log->registrer('Inicio de sesion exitosa', 'sesion');

        return array(
          'mgs' => 'usuario logeado',
          'status' => true
        );
      }else{
        $this->log->registrer('Inicio de sesion fallida', 'sesion');
        return array(
          'mgs' => 'usuario no logeado',
          'status' => false
        );
      }
    }

    public function logout(){
      $this->log->registrer('Finalizar de sesion', 'sesion');
      session_destroy();
    }

  }

  // $user = new userController();

?>
