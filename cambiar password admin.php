<?php
session_start();
if ($_SESSION['categoria'] !== 'medio' && $_SESSION['categoria']
!== 'avanzado') {,→
header('Location: ./');
exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
include 'conexion.php';
$usuario = mysqli_real_escape_string($conexion,
$_POST['usuario']);,→
$password_nueva = password_hash($_POST['password_nueva'],
PASSWORD_DEFAULT);,→
$actualizar = "UPDATE usuarios SET password =
'£password_nueva ' WHERE nombre = '£usuario '";,→
if ($conexion->query($actualizar) === TRUE) {
echo "Contrase~na actualizada exitosamente para el usuario:
£usuario .";,→
} else {
echo "Error al actualizar la contrase~na: " .
$conexion->error;,→
}
$conexion->close();
exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cambiar Contrase~na de Usuarios</title>
</head>
<body>
<h1>Cambiar Contrase~na de un Usuario</h1>
<form method="POST" action="cambiar_password_admin.php">
<label>Usuario:</label>
<input type="text" name="usuario" required><br><br>
<label>Nueva Contrase~na:</label>
<input type="password" name="password_nueva"
required><br><br>,→
<input type="submit" value="Actualizar Contrase~na">
</form>
<p><a href="principal_medio.php">Volver</a></p>
</body>
</html>