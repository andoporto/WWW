<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Creación de un portal con PHP y MySQL</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$conexion = mysql_connect('127.0.0.1:3306', 'root', '');
mysql_select_db('test', $conexion);
$consulta = mysql_query("select nombre from usuarios where usuario like '$usuario' and contrasenia like '$contrasenia'", $conexion);
$dato = mysql_fetch_array($consulta);
$cambia = $dato['nombre'];
if ($dato == "") {
	echo 'Los datos no son correctos, <a href="login.html">volver</a>';
} else {
	echo "Bienvenido a nuestra web $cambia";
}
?>
</body>
</html>