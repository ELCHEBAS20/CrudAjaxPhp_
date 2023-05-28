<?php

header('Content-type: application/json; charset=utf-8');
$getGet = $_GET['StrlAccion'];
require_once('./Controller/UsuarioController.php');
$objController = new UsuarioController();


if ($getGet == 'Lista') {
  $objController->ListView();
} else if ($getGet == 'Modificar') {
  $objController->ModifUser();
} else if ($getGet == 'Eliminar') {
  $objController->DeletUser();
} else if ($getGet == 'Insertar') {
  $objController->insertUser();
}
