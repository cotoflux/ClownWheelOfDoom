<?php
$_POST;
include "Connect.php";
$conexion = new Connect();

$con = $conexion->connectBD();
$listaId=$conexion->listaUsuarios($con);
$idUsuario = $conexion->matarUsuario($listaId);
$nombreMuerto=$conexion->mostrarMuerto($idUsuario,$con);
echo $nombreMuerto;
//$conexion->cambioEstado($idUsuario,$con);