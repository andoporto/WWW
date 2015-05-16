<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php


$conectar=mysql_connect('localhost','root','');

mysql_select_db('prueba',$conectar);

$res=mysql_query('select * from productos',$conectar);

$cant=mysql_num_rows($res);



$fila=mysql_fetch_array($res);

echo $fila[1]."".$fila[2]."<br>";


$fila=mysql_fetch_array($res);

echo $fila[1]."".$fila[2];

?>
<body>
</body>
</html>
