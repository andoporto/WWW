<?PHP
$playlist=$_GET["play"];
require("php_funciones/funciones_de_conexion.php");
conect=conectarBaseDatos('localhost','root','','zona_musica');
$consulta=mysql_query("select * from ",$conect);
?>