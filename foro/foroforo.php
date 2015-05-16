<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ver mensaje en el foro</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="pantalla.css" />
</head>
<body>
<?php
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('foro', $conexion);
$consulta = mysql_query("SELECT * FROM foro WHERE id='$id' ORDER BY fecha DESC", $conexion);
while ($fila = mysql_fetch_array($consulta)) {
$mensaje = str_replace("\n", "\n<br />\n", $fila['mensaje']);
?>
<h1><?php echo $fila['titulo']; ?></h1>
<p>Autor: <?php echo $fila['autor']; ?></p>
<p><?php echo $mensaje; ?></p>
<p><a href="formularioforo.php?id=<?php echo $id ?>&respuestas=<?php echo $id ?>">Agregar mensaje</a></p>
<p><a href="index.php">Volver al foro</a></p>
<?php
}
$consulta2 = mysql_query("SELECT * FROM foro WHERE identificador='$id' ORDER BY fecha DESC", $conexion);
?>
<p>Respuestas:</p>
<?php
while ($fila = mysql_fetch_array($consulta2)) {
$mensaje = str_replace("\n", "<br />", $fila['mensaje']);
?>
<h2><?php echo $fila['titulo']; ?></h2>
<p>Autor: <?php echo $fila['autor']; ?></p>
<p><?php echo $mensaje; ?></p>
<?php } ?>
</body>
</html>