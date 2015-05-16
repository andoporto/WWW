<?PHP
$genero = $_GET["gene"];
require("php_funciones/funciones_de_conexion.php");
require ("php_funciones/funciones_de_consulta.php");

$conect=conectarBaseDatos('localhost','root','','zona_musica');
$cancion=consultarMp3("select * from mp3 where genero='$genero';",$conect);


?>