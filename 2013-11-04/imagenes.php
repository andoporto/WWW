<?php
/*
delimiter $$
CREATE TABLE `imgs` (
  `nombre` varchar(45) DEFAULT NULL,
  `img` longblob,
  `tipo` varchar(45) DEFAULT NULL,
  `tamanio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii$$
*/
$SERVIDOR = "localhost";
$USUARIO = "root";
$CLAVE = "";
$BASE = "test";
if (isset($_REQUEST["accion"])) {
	if ($_REQUEST["accion"] == "subir") {
		// obtenemos los datos del archivo
		$tamano = $_FILES["archivo"]['size'];
		$tipo = $_FILES["archivo"]['type'];
		$archivo = $_FILES["archivo"]['name'];
		$tmpName = $_FILES['archivo']['tmp_name'];
        if ($archivo != "") {
			$fp = fopen($tmpName, 'r');
			$imagen = fread($fp, $tamano);
			$imagen = addslashes($imagen);
			fclose($fp);
			$mysqli = new mysqli($GLOBALS['SERVIDOR'], $GLOBALS['USUARIO'], $GLOBALS['CLAVE'], $GLOBALS['BASE']);
			$sql = "INSERT INTO imgs (nombre, img, tipo, tamanio) VALUES ('$archivo', '$imagen', '$tipo', '$tamano')";
			if ($mysqli->query($sql . ";") === TRUE) {
				echo "Archivo subido: <b>" . $archivo . "</b>";
			} else {
				echo "Error al subir el archivo";
			}
			$mysqli->close();
		}
		else {
			echo "Error al subir archivo";
		}
		exit();
	}
	if ($_REQUEST["accion"] == "traer") {
		// obtenemos imagen
		$mysqli = new mysqli($GLOBALS['SERVIDOR'], $GLOBALS['USUARIO'], $GLOBALS['CLAVE'], $GLOBALS['BASE']);
		$sql = "SELECT img, tamanio, tipo, nombre FROM imgs WHERE nombre='" . $_REQUEST["nombre"] . "'" ;
		$resultado = $mysqli->query($sql . ";");
		if ($resultado->num_rows > 0) {
			$row = (array)$resultado->fetch_object();
			header("Content-Disposition: attachment; filename=" . $row['nombre']);
			header("Content-length: " . $row['tamanio']);
			header("Content-type: " . $row['tipo']);
			echo $row['img'];
		}
		exit();
    }
}
?>
<html>
<head>
<style type="text/css">
#zoom {
	width: 850px;
	height: 650px;
	overflow: auto;
	text-align: center;
}
</style>
<title>Imagenes</title>
</head>
<body onkeyup="TeclaEscape()" ></body>
    <form action="imagenes.php" method="post" enctype="multipart/form-data">
      <input name="archivo" type="file" size="35" />
      <input name="enviar" type="submit" value="subir Imagen" />
      <input name="accion" type="hidden" value="subir" />     
    </form>
    <form action="imagenes.php" method="post">
      <input name="imagenAver" type="text" size="35" />
      <input name="enviar" type="submit" value="Ver Imagen" />
      <input name="accion" type="hidden" value="ver" />     
    </form>
<script type="text/javascript">
function tamanio(opt) {
	var obj = document.currentImg;
	obj.width = eval(obj.width + opt + 1.5);
}
function bajar() {
	window.location = "Imagenes.php?accion=traer&nombre=<?php echo isset($_REQUEST["imagenAver"]) ? $_REQUEST["imagenAver"] : ""; ?>";
}
var giro=0;
function rotar(sentido) {
	var imagen = document.currentImg;
	giro += eval(sentido + '1');
	if (giro == 4) { giro=0;}
	if (giro == -1) { giro=3;}
	imagen.style.filter = 'progid:DXImageTransform.Microsoft.BasicImage(rotation=' + giro + ')';
}
function Imprimir() {
	zoom.visibility = "hidden";
	cmdAumentar.visibility = "hidden";
	cmdReducir.visibility = "hidden";
	cmdBajar.visibility = "hidden";
	cmdRotarDerecha.visibility = "hidden";
	cmdRotarIzquierda.visibility = "hidden";
	cmdImprimir.visibility = "hidden";
	window.print();
	zoom.visibility = "visible";
	cmdAumentar.visibility = "visible";
	cmdReducir.visibility = "visible";
	cmdBajar.visibility = "visible";
	cmdRotarDerecha.visibility = "visible";
	cmdRotarIzquierda.visibility = "visible";
	cmdImprimir.visibility = "visible";
}
function TeclaEscape() {
	var keycode;
	if (window.event) keycode = window.event.keyCode;
	if (keycode == 27) {
		Cancelar()
	}
}	
function Cancelar() {
window.close();
}
</script>
<?php
if (isset($_REQUEST["accion"]))  {
    if($_REQUEST["accion"] == "ver") {
		$mysqli = new mysqli($GLOBALS['SERVIDOR'], $GLOBALS['USUARIO'],$GLOBALS['CLAVE'], $GLOBALS['BASE']);
		$sql = "SELECT img FROM imgs WHERE nombre='" . $_REQUEST["imagenAver"] . "'" ;
		$resultado = $mysqli->query($sql . ";");
		if ($resultado->num_rows == 0) {
			header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
?>
<td><CENTER><FONT SIZE="100" COLOR="red">No existe la imagen <?php echo $_REQUEST["imagenAver"]; ?></FONT></CENTER></td>
<?php
		} else {	
			$row = (array)$resultado->fetch_object();
?>
<div id='zoom'><img src="Imagenes.php?accion=traer&nombre=<?php echo $_REQUEST["imagenAver"]; ?>" width="100%" name="currentImg" /></div>
&#160;&#160;&#160;<INPUT type="image" src="images/mas.gif" id="cmdAumentar" accesskey="+" title="Aumentar tamaño de Imagen" onClick="javascript:tamanio('*');">
&#160;&#160;&#160;<INPUT type="image" src="images/menos.gif" id="cmdReducir" accesskey="-" title="Reducir tamaño de Imagen" onClick="javascript:tamanio('/');">
&#160;&#160;&#160;<INPUT type="image" src="images/save.gif" id="cmdBajar" accesskey="B" title="Bajar imagen a Disco" onClick="javascript:bajar();">
&#160;&#160;&#160;<INPUT type="image" src="images/RotarDerecha.gif" id="cmdRotarDerecha" accesskey="D" title="Rotar la Imagen en el sentido de las agujas del reloj" onClick="javascript:rotar('+');">
&#160;&#160;&#160;<INPUT type="image" src="images/RotarIzquierda.gif" id="cmdRotarIzquierda" accesskey="I" title="Rotar la Imagen en el sentido contario a las agujas del reloj" onClick="javascript:rotar('-');">
&#160;&#160;&#160;<INPUT type="image" src="images/print.gif" id="cmdImprimir" accesskey="M" title="Imprimir" onClick="javascript:Imprimir();">
<?php
		}
		$resultado->close();
		$mysqli->close();
	    }
	 }
?>
</html>