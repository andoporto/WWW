<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>An XHTML 1.0 Strict standard template</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<style type="text/css">
body {
	font: 1em/1.5 sans-serif;
	margin: 1em;
	padding: 0;
}
p {
	margin: 1em 0;
}
</style>
</head>
<body>
<p>Su mensaje ha sido enviado. En breve nos comunicaremos con usted. Gracias.</p>
<?php
$fecha = date("d/m/Y");
$hora = date("H:i");
$destinatario = "leandroandres1@gmail.com";/* dirección a la que van los mails */
$asunto = "Contacto de cliente";
$cabeceras = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: leandroandres1@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

echo "<br /><br /><br />";
echo 'Compruebe si sus datos son correctos, de lo contrario <a href="index.html">haga click aquí</a>';
$texto = "Nombre: " . "\n" . $_POST['nombre'] . "<br />" . "Apellidos: " . "\n" . $_POST['apellidos'] . "<br />" . "Dirección: " . "\n" . $_POST['direccion'] . "<br />" . "Localidad: " . "\n" . $_POST['localidad'] . "<br />" . "Provincia: " . "\n" . $_POST['provincia'] . "<br />" . "E-mail: " . "\n" . $_POST['email'] . "<br />" . "Fecha: " . "\n" . $fecha . "<br />" . "Hora: " . $hora;
/*
Lo que hacemos con la variable $texto es unir dentro de ella todos los campos que recibimos del formulario para poder enviar todo el contenido con los datos de contacto
*/
echo "<br /><br /><br />";
echo $texto;
echo "<br /><br />";
mail($destinatario, $asunto, $texto, $cabeceras);
?>
</body>
</html>