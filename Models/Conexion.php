<?php namespace Models;

  /**
   *
   */
  class Conexion{

    private $datos = array(
      'host' => '127.0.0.1',
      'user' => 'root',
      'pass' => 'root',
      'db' => 'pruebaphp'
    );

    private $con;

    public function __construct(){
      $this->con = new \mysqli(
        $this->datos['host'],
        $this->datos['user'],
        $this->datos['pass'],
        $this->datos['db']
      );
    }

    public function execute($sql){
      $this->con->query($sql);
    }

    public function executeReturn($sql){
      $data = $this->con->query($sql);
      $result = array();
      while($row = $data->fetch_assoc()){
        $result[] = $row;
      }
      return $result;
    }
  }

?>
