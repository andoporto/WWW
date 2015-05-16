<?php 
$conexion = mysql_connect("localhost:3306", "root", "") or exit('No se puede realizar la conexion con la base de datos.');
mysql_select_db("test");
//declaramos como variables a los campos de texto del formulario
$user = $_POST["user"];
$password = $_POST["password"];
//Consulta del usuario y el password
$query = "SELECT usuario, contrasenia FROM usuariosViejo WHERE usuario='$user' and contrasenia='$password'";
$rs = mysql_query($query);
$row = mysql_fetch_object($rs);
$nr = mysql_num_rows($rs);
//Si existe el usuario lo va a redireccionar a la pagina de Bienvenida
if($nr == 1) { 
	header("Location: bienvenido.php");
}
//Si no existe lo va a enviar al login otra vez
else if($nr <= 0) {
	header("Location: login.html");
}   
?>