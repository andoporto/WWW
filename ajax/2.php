<?PHP
$id = $_GET["lab"];
$conn = mysql_connect("localhost","root");
mysql_select_db("prueba",$conn);
$res = mysql_query("select * from productos where laboratorio=".$id,$conn);

while($fila=mysql_fetch_row($res)){
echo $fila[0]."|".$fila[1]."<br/>";
}
?>