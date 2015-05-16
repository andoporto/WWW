<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Crear mensaje en el foro</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="pantalla.css" />
</head>
<body>
<?php
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('foro', $conexion);
$fecha = time();
if (empty($identificador)) {
	$identificador = 0;
}
$respuesta = $respuestas + 1;
$sql1 = "INSERT INTO foro (autor, titulo, mensaje, fecha, identificador) VALUES ('$autor', '$titulo', '$mensaje', '$fecha', '$identificador')";
mysql_query($sql1);
$sql2 = "UPDATE foro SET respuestas = '$respuesta' WHERE id = '$identificador'";
mysql_query($sql2);
$resultado = mysql_query("SELECT '$mensaje' FROM foro WHERE mensaje='$mensaje'", $conexion);
while ($registro = mysql_fetch_row($resultado)) {
	foreach ($registro as $clave) {
		$claveSL = str_replace("\n", "<br />", $clave);
		echo $claveSL;
	}
}
echo '<p><a href="index.php">Volver al foro</a></p>';
?>
</body>
</html>