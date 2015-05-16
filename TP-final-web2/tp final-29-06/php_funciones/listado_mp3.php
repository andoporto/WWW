
					 <?php
					 
					 	require("php_funciones/funciones_de_conexion.php");
						require ("php_funciones/funciones_de_consulta.php");
						
						
						$genero=$_GET['genero'];
						 $conect=conectarBaseDatos('localhost','root','','zona_musica');
						 
						 $cancion=hacerConsulta("select * from mp3 where genero='$genero';",$conect);
					
						 
						
						 
					 ?>