<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<script>


function getXMLHTTP() { 
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e){
					xmlhttp=false;
				}
			}
		}
		return xmlhttp;
}


function busca_lista(nombre) {	
          
		var strURL="buscar_temasplay.php?play="+nombre;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {		
						document.getElementById('temas').innerHTML=req.responseText;
 					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			
			req.send(null);
		}
}
</script>

</head>

<body>

<?PHP
require("php_funciones/funciones_de_conexion.php");

function misplaylist($usuario){
$conect=conectarBaseDatos('localhost','root','','zona_musica');
$consulta=mysql_query("select p.nombre from playlist p inner join carga c on p.id_playlist=c.id_playlist where c.nombre='$usuario';",$conect);

$num=mysql_num_rows($consulta);

echo "<ol>";
while($array=mysql_fetch_row($consulta)){
	echo "<li><a href='#' onclick='busca_lista('$array[0]')'>".$array[0]."</a></li>";
}
echo "</ol>";
echo "<div id='temas'></div>";

}

?>

</body>
</html>