<?php namespace Models;

  /**
   *
   */
  class User{

    private $id;
    private $name_user;
    private $pass;

    private $con;

    public function __construct(){
      $this->con = new Conexion();
    }

    public function set($attributte, $value){
      $this->$attributte = $value;
    }

    public function get($attributte){
      return $this->$attributte;
    }

    public function login($user, $password){
      $password = md5($password);
      $sql = "SELECT * FROM t_user WHERE name_user = '$user' AND pass = '$password'";
      $data = $this->con->executeReturn($sql);

      return $data;
    }
  }

 ?>
