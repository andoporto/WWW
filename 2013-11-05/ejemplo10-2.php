<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>An XHTML 1.0 Strict standard template</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
if ($action == 'setcookie') {
	setcookie("nombre", $nombre);
	echo $_COOKIE["nombre"];
	echo "<br />";
	session_start();
}
?>
</body>
</html>