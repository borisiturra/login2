<?php
$servidor = 'localhost';
$usuario = 'root';
$contrase~na = '';
$base_datos = 'registros';
$puerto = 3306; // Puerto por defecto para MySQL/MariaDB
$conexion = new mysqli($servidor, $usuario, $contrase~na,
$base_datos, $puerto);,→
if ($conexion->connect_error) {
die('Error de conexion: ' . $conexion->connect_error);
}
?>