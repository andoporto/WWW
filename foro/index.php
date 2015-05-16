<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inicio del foro</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="pantalla.css" />
</head>
<body>
<h1>Foro del portal de coches</h1>
<p><a href="formularioforo.php?respuestas=0">Crear mensaje</a></p>
<table>
<tr>
<th>Título</th>
<th>Fecha</th>
<th>Respuestas</th>
</tr>
<?php
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('foro', $conexion);
$consulta = mysql_query('SELECT * FROM foro WHERE identificador = 0 ORDER BY fecha DESC', $conexion);
$lado = mysql_num_rows($consulta);
while ($fila = mysql_fetch_array($consulta)) {
?>
<tr>
<td><a href="foroforo.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['titulo']; ?></a></td>
<td><?php echo date("d/m/Y", $fila['fecha']); ?></td>
<td><?php echo $fila['respuestas']; ?></td>
</tr>
<?php } ?>
</table>
<p><a href="formularioforo.php?respuestas=0">Crear mensaje</a></p>
</body>
</html>