<?php namespace Models;

/**
 *
 */
class Log{

  private $con;

  public function __construct(){
    $this->con = new Conexion();
  }

  public function registrer($mgs, $typeLog){

    $ipClient = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $user = $_SESSION['user'];

    $sql = "INSERT INTO t_log(id_user, date_register, msg, type_log, ip, browser) VALUES($user, NOW(), '$mgs', '$typeLog', '$ipClient', '$browser')";
    $this->con->execute($sql);
  }

}


?>
