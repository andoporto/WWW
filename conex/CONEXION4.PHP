<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$codigo=$_POST['numero'];

$conectar=mysql_connect('localhost','root','');

mysql_select_db('prueba',$conectar);

$sql="select * from productos where idproductos<$codigo";

$res=mysql_query($sql,$conectar);

$cant=mysql_num_rows($res);
echo $cant."<br>";
$fila=mysql_fetch_row($res);

echo $fila[1]."&nbsp;".$fila[2]."<br>";






?>
<body>
</body>
</html>
