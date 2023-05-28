<?php


class UsuarioController
{

  public $getConn;

  function __construct()
  {
    include('./Connection/Connection.php');
    $ObjConnection = new conexion();
    $this->getConn = $ObjConnection->setConnection();
  }

  public function ListView()
  {

    $Query = "SELECT * FROM usuario";
    $Execute = mysqli_query($this->getConn, $Query);
    $count = 0;

    while ($row = mysqli_fetch_array($Execute)) :

      $array[$count++] = [
        'id' => $row['idUsuario'],
        'nombre' => $row['Nombre'],
        'apellido' => $row['Apellido'],
        'edad' => $row['Edad'],
        'direccion' => $row['Direccion']
      ];

    endwhile;

    echo json_encode($array);
  }


  public function insertUser()
  {
    $Query = "INSERT INTO usuario(Nombre,Apellido,Edad,Direccion) VALUES('{$_POST['nombre']}','{$_POST['apellido']}','{$_POST['edad']}','{$_POST['direccion']}')";
    $execute = mysqli_query($this->getConn, $Query);
    echo $execute == 1 ? true : false;
  }

  public function ModifUser()
  {

    $Query = "UPDATE usuario SET Nombre='{$_POST['nombre']}',Apellido='{$_POST['apellido']}',Edad='{$_POST['edad']}',Direccion='{$_POST['direccion']}' WHERE idUsuario='{$_POST['id']}'";
    $execute = mysqli_query($this->getConn, $Query);

    echo $execute == 1 ? true : false;
  }

  public function DeletUser()
  {
    $Query = "DELETE FROM usuario WHERE idUsuario='{$_POST['idUser']}'";
    $execute = mysqli_query($this->getConn, $Query);
    echo $execute == 1 ? true : false;
  }
}
