<?php
$_POST;
include "Connect.php";
$conexion = new Connect();

$con = $conexion->connectBD();

$listaId=$conexion->listaUsuarios($con);
$idUsuario = $conexion->matarUsuario($listaId);
$nombreMuerto=$conexion->mostrarMuerto($idUsuario,$con);
$conexion->cambioEstado($idUsuario,$con);
//$conexion->reset($con);
echo $nombreMuerto;


