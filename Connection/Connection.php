<?php


class conexion
{


  public $server = '';
  public $User = '';
  public $Pswd = '';
  public $Bd = '';


  function __construct()
  {
    $this->server = 'localhost';
    $this->User = 'root';
    $this->Pswd = '';
    $this->Bd = 'crudajax';
  }


  public function setConnection()
  {

    $Conn = mysqli_connect($this->server, $this->User, $this->Pswd, $this->Bd);

    return $Conn;
  }
}
