<?php
$_POST;
include "Connect.php";
$conexion = new Connect();

$con = $conexion->connectBD();
$conexion->reset($con);
