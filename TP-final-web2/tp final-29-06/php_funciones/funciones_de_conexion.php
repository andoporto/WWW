
<?php


function prueba()
{
echo "funcionando";

}


function leerValores(){//leer valores del formulario de registracion




$usuario=$_POST['usuario'];
$contraseña=$_POST['pass'];
$email=$_POST['email'];



}

function conectarBaseDatos($nombreServidor,$usuarioNombre,$passServidor,$nombreBase){//conectar a base de datos

$conect=mysql_connect($nombreServidor,$usuarioNombre,$passServidor);
$base=mysql_select_db($nombreBase,$conect) or die("error de seleccion de base de datos");


return $conect;


}








?>