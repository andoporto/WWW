<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Creación de un portal con PHP y MySQL</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$email = $_POST['email'];
$conexion = mysql_connect('127.0.0.1:3306', 'root', '');
mysql_select_db('test', $conexion);
$consulta = mysql_query("insert into usuarios (nombre, apellido, usuario, contrasenia, email) values ('$nombre', '$apellido', '$usuario', '$contrasenia', '$email')", $conexion);
echo "Bienvenido a nuestra web $nombre";
?>
</body>
</html>