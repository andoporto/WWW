<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<script type="text/javascript">
		function cambio(evento)
		{
			if(evento.keyCode==13){
				//si en este explorador existe esta propiedad
				if(window.XMLHttpRequest){
					var datos = new XMLHttpRequest();
				}
				else {
					//para navegadores anteriores a explorer 6
					var datos = new ActiveXObject("Microsoft.XMLHttpRequest");
				}
			}
			datos.onreadystatechange=function(){
				procesa(datos);
				
			}
			datos.open("GET","obtenerdatos.php?valor="+texto.value,true);
			datos.send();
		}
		function procesa(datos){
			//4 significa que termino, 200 es que termino ok
			if(datos.readyState==4 && datos.status==200){
				var resp=datos.responseText;
				document.getElementById('combo').innerHTML=resp;
			}
		}
	</script>
</head>
<body>
	<span id="combo">
		<select>
			
		</select>
	</span>
	<input type="textbox" id="texto" onkeyUp="cambio(event)">
</body>
</html>