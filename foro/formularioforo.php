<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Crear mensaje en el foro</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="pantalla.css" />
</head>
<body>
<h1>Crear mensaje en el foro</h1>
<form action="addforo.php" method="post" id="formCrearMensaje">
<fieldset>
<legend>Crear mensaje en el foro</legend>
<p><label for="autor">Nombre y apellido</label><input type="text" name="autor" id="autor" /></p>
<p><label for="titulo">Asunto</label><input type="text" name="titulo" id="titulo" /></p>
<p><label for="mensaje">Mensaje</label><textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea></p>
</fieldset>
<p><input type="hidden" name="respuestas" value="<?php echo $respuestas; ?>" /><input type="hidden" name="identificador" value="<?php echo $id; ?>" /><button type="submit">Enviar</button></p>
</form>
</body>
</html>