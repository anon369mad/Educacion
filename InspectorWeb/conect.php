<?php
$server="localhost";
$user="root";
$bd="bitacora";

$fecha=date("d/m/Y");
$hora=date("H:i:s");

$conexion = mysqli_connect( $server, $user, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $bd) or die ("No se ha podido conectar al servidor de Base de datos");
?>