 
<?PHP
$genero = $_GET["gene"];

require("php_funciones/funciones_de_conexion.php");
 $conect=conectarBaseDatos('localhost','root','','zona_musica');

 
switch($genero){
         
		 case ("genero"):
		 
		     
				$consultar=mysql_query("select distinct(genero) from mp3;",$conect) or die ("Error de Consulta");
				echo "<div style='font-size:13px;color:orange;'>";
				echo "Por G&eacute;nero <br/><br/>";
				echo "<select id='PorGeneros' name='PorGeneros'>";
				while($array=mysql_fetch_array($consultar))
				{
				echo "<option selected> ";
				echo $array[0];
				echo "</option>";
				}
               echo "</select>";
               echo "</div>";
			   
			   
		  break;
		  
		  
		  
		  
		  
		  case("playlist"):
		  
		  
				$consultar=mysql_query("select nombre from playlist where privacidad='publica';",$conect) or die ("Error de Consulta");
				echo "<div style='font-size:13px;color:orange;'>";
				echo "Por Playlist <br/><br/>";
				echo "<select id='PorPlaylist' name='PorPlaylist'>";
				while($array=mysql_fetch_array($consultar))
				{
				echo "<option selected> ";
				echo $array[0];
				echo "</option>";
				}
				echo "</select>";
				echo "</div>";
			   
			   
			break;
          
		  
		  case("onda"):
		  
				$consultar=mysql_query("select onda from playlist where privacidad='publica';",$conect) or die ("Error de Consulta");
				echo "<div style='font-size:13px;color:orange;'>";
				echo "Por Onda <br/><br/>";
				echo "<select id='PorOnda' name='PorOnda'>";
				while($array=mysql_fetch_array($consultar))
				{
				echo "<option selected> ";
				echo $array[0];
				echo "</option>";
				}
				echo "</select>";
				echo "</div>";
				
		  break;
		  
		  
		  
		  
		  
		  case("usuario"):
		  
		  
				$consultar=mysql_query("select nombre from usuario;",$conect) or die ("Error de Consulta");
				echo "<div style='font-size:13px;color:orange;'>";
				echo "Por Usuario <br/><br/>";
				echo "<select id='PorUsuarios' name='PorUsuarios'>";
				while($array=mysql_fetch_array($consultar))
				{
				echo "<option selected> ";
				echo $array[0];
				echo "</option>";
				}
				echo "</select>";
				echo "</div>";
			   

		 break;
		 
           
		    case("reproducciones"):
			
			
				$consultar=mysql_query("select reproduccion from playlist where privacidad='publica';",$conect) or die ("Error de Consulta");
				echo "<div style='font-size:13px;color:orange;'>";
				echo "Por Reproducciones <br/><br/>";
				echo "<select id='PorReproducciones' name='PorReproducciones'>";
				while($array=mysql_fetch_array($consultar))
				{
				echo "<option selected> ";
				echo $array[0];
				echo "</option>";
				}
				echo "</select>";
				echo "</div>";		   
		  break;


      }
	  
	 
	 
?>

