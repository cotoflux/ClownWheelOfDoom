<?php
$_POST;
include "Connect.php";
$conexion = new Connect();

$con = $conexion->connectBD();
$listaId=$conexion->listaUsuarios($con);
$idUsuario = $conexion->matarUsuario($listaId);
echo $idUsuario;
//$conexion->cambioEstado($idUsuario,$con);