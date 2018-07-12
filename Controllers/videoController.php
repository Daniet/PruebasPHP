<?php namespace Controllers;

  /**
   *
   */
  use Models\Log as Log;
  use Models\Video as Video;

  class videoController{

    private $video;
    private $log;

    public function __construct(){
      $this->video = new Video;
      $this->log = new Log();
    }

    public function index(){

      $data = $this->video->list();
      return $data;
    }

    public function showRegister(){
      $url = $_POST['video'];
      $this->log->registrer($url, 'ver video');
    }
  }


?>
