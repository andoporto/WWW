<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>An XHTML 1.0 Strict standard template</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<form action="ejemplo10-2.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Cookie y sesiones</legend>
<p><label for="nombre">Nombre</label><input type="text" name="nombre" /></p>
</fieldset>
<p><button type="submit">Enviar</button><input type="hidden" name="action" value="setcookie" /></p>
</form>
<?php
if ($action == 'setcookie') {
	setcookie("nombre", $nombre);
}
?>
</body>
</html>