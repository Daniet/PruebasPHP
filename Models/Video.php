<?php namespace Models;

  /**
   *
   */
  class Video{

    public function __construct(){
      $this->con = new Conexion();
    }

    public function list(){
      $sql = "SELECT * FROM t_video;";
      $data = $this->con->executeReturn($sql);
      // $row = $data->fetch_all();
      return $data;
    }

  }


?>
