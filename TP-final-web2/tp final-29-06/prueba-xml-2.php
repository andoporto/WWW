<?PHP
  
header("Content-type: text/xml");
  
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$database = "prueba2";
  
$enlace = mysql_connect($host, $user, $pass) or die("Error MySQL."); 
mysql_select_db($database, $enlace) or die("Error base de datos.");
  
$query = "SELECT * FROM productos"; 
$resultado = mysql_query($query, $enlace) or die("Sin resultados.");
  
$salida_xml = '<?xml version="1.0"?>'; 
$salida_xml .= "<informacion>\n";
  
for($x = 0 ; $x < mysql_num_rows($resultado) ; $x++){ 
    $fila = mysql_fetch_assoc($resultado); 
    $salida_xml .= "\t<post>\n"; 
    $salida_xml .= "\t\t<titulo>" . $fila['title'] . "</titulo>\n"; 
    $salida_xml .= "\t\t<url>" . $fila['url'] . "</url>\n";
    $salida_xml .= "\t</post>\n"; 
}
  
$salida_xml .= "</informacion>";
  
echo $salida_xml;
  
?>