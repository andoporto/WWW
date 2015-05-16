
<?php


function hacerConsulta($consulta,$conect)
{

$consultar=mysql_query($consulta,$conect) or die ("error de consulta");

return $consultar;
}

function consultarMp3($consulta,$conect){


$consultar=mysql_query($consulta,$conect) or die ("error de consulta");


//$i=mysql_num_rows($consultar);
echo "<ol style='width:70%;float:right'>";
while($array=mysql_fetch_array($consultar))
{

$campos=mysql_num_fields($consultar);

//echo "<br>".$array[0]."|".$array[1]."|".$array[2];


	
	
	
	echo "<li style='border-style:solid;border-width:1px;border-color:blue;padding:15px '> ";
	echo "<h3>".$array[3]."</h3>";
	echo $array[1];
	
	echo "<object style='float:right' type='application/x-shockwave-flash' data='dewplayer/dewplayer-vol.swf?mp3=$array[7]' width='240' height='20' id='dewplayer-vol'><param name='wmode' value='transparent' /><param name='movie' value='dewplayer-vol.swf?mp3=$array[7]' /></object></li>";;
	echo "</li>";
	
			
		
		
	
		
		
	






}



echo "</ol>";
}






?>