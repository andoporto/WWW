<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >

<html xmlns="http://www.w3.org/1999/xhtml"  lang="en">
	
<head>
			<link type="text/css" rel="stylesheet" href="Form-estilos.css" />
			<link type="text/css" rel="stylesheet" href="Tabla-estilos.css" />
			<link type="text/css" rel="stylesheet" href="Estilos\ToDo-Estilos.css" />
			<link type="text/css" rel="stylesheet" href="Estilos/demos.css" />
			<link type="text/css" rel="stylesheet" href="Jquery/themes/base/jquery.ui.all.css" />
            
			<script type="text/javascript" src="Jquery//jquery-1.8.2.js"> </script>
			<script type="text/javascript" src="Jquery/ui/jquery.ui.core.js"> </script>
			<script type="text/javascript" src="Jquery/ui/jquery.ui.widget.js"> </script>
			<script type="text/javascript" src="Jquery/ui/jquery.ui.tabs.js"> </script>
			
			
<title>PLAYLIST</title>
			
<!--Funcion jquery para los tabs  -->
			
			<script type="text/javascript">
			
			$(function() {   $( "#tabs" ).tabs();});
			
			</script>
			
			 <script type="text/javascript">
			
			         $(function() {   $( "#tabs1" ).tabs();});
			
					</script>
                    
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


function busca(gen) {	
          
		var strURL="buscar.php?gene="+gen;// document.getElementById("gen").value;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {		
						document.getElementById('mp3').innerHTML=req.responseText;
 					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			
			req.send(null);
		}
}


function busca2(gen) {	
         
		var strURL="buscar_SelectOption.php?gene="+gen;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {		
						document.getElementById('buscar2').innerHTML=req.responseText;
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

<div id="encabezado">
<div style="background-color:orange;float:left; width:30%; height:80px;"> </div>
<div style="background-color:orange;float:left; width:30%; height:80px;"> </div>
<div style="background-color:orange;float:left; width:40%; height:80px;">

      <form action="veri_usuario.php" method="post"> 
     
	                
					 <div>
					 <label for="usuario"><font color="blue">Usuario:</font></label> <br/>
	                 <input type="text" name="usuario" id="usuario" onkeypress="return caracteres_esp(event);"  required  /> <br/></div>
	                
					 
	                 <div>
					 <label for="password"><font color="blue">Password:</font></label><br/>
	                 <input type="password" name="pass" id="pass"  onkeypress="return caracteres_esp(event);" required /> 
	                 
					
	
					
					
					</form> 
					
					<a href="formulario.html"><font size=4> NO estas Registrado?</font></a>
					<!-- Fin Fomulario Registracion -->
                    </div>
 </div>



</div>

<div style=" width:100%; height:20px;"></div>

<div class="div1"></div>
	
<div id="registracion3">				   
			<!--listas para los  Tabs -->
<div id="tabs">
	<ul>
		<li><a href="#tabs-1"><p class="solapa"><font size=4>Inicio</font></p></a></li>
		<li><a href="#tabs-2"><p class="solapa"><font size=4>PlayList Públicas</font></p></a></li>
		<li><a href="#tabs-3"><p class="solapa"><font size=4>Mis PlayList</font></p></a></li>
		<li><a href="#tabs-4"><p class="solapa"><font size=4>Ubicaci&oacute;n</font></p></a></li>
		<li><a href="#tabs-5"><p class="solapa"><font size=4>Mi Cuenta</font></p></a></li>
		
	</ul>
	
	<div id="tabs-1">
		
		<div style="width:100%; height:509px;">   
	
	                
	
				<div id="tabs1">
					<ul>
					<li><a href="#tabs-7" style="color:orange;">CARGAR</a></li>
					<li><a href="#tabs-8"  style="color:orange;">BUSCAR</a></li>
		
					</ul>
	
					<div id="tabs-7">
					<div style="width:100%;height:200px;">
					   
					
					</div>
					</div>
	
					<div id="tabs-8">
					<div style="width:100%; height:200px;" id="lista_mp3">
					
					 <div style="width:20%; height:430px;float:left;">
					 
                     <div style="width:150px;border-style:solid;border-width:1px;color:blue;font-size:13px;">
                     <ol><li><a href="#" onclick="busca('rock')">Rock</a></li>
                     	<li><a href="#" onclick="busca('pop')">Pop</a></li>
                        <li><a href="#" onclick="busca('heavy metal')">Heavy-Metal</a></li>
                        <li><a href="#" onclick="busca('latino')">Latino</a></li>
                        <li><a href="#" onclick="busca('folklore')">Folklore</a></li>
                        <li><a href="#" onclick="busca('electronica')">Electronica</a></li>
                        <li><a href="#" onclick="busca('hip-hop')">hip-hop</a></li>
                     
                     </ol>
                     </div>
                     </div>
                    <div id="mp3" style="width:70%; height:430px;float:left;">
                     <div style="text-align:center;color:orange;">SELECCIONE UNA OPCI&Oacute;N</div>
					
                     
                     
                  
					  </div> 
                     
					</div>	
					
	                
				  </div>				
	           <div class="contenedortabla"> </div>		
		    
		
		     
		
	  </div>
		
					
	</div>
	</div>
	
	<div id="tabs-2">
		<div style="width:100%; height:509px;">
		<div class="contenedorTab">
				
				       
	             
				<div class="contenedorTab1">
				   
				  <div id="buscar">
				    
				    <div style="width:170px;color:blue;font-size:13px;border-style:solid;border-width:1px;">
                     <ol><li><a href="#" onclick="busca2('genero')">Por Genero</a></li>
                     	<li><a href="#" onclick="busca2('playlist')">Por Playlist</a></li>
                        <li><a href="#" onclick="busca2('onda')">Por Onda</a></li>
                        <li><a href="#" onclick="busca2('usuario')">Por Usuario</a></li>
                        <li><a href="#" onclick="busca2('reproducciones')">Por Reproducciones</a></li>
                     
                     </ol>
                     </div>
				  </div>
				
	               <div id="buscar2"></div>			   
				
				   </div>        
				<div class="contenedorTab2">LISTADO
				
			
	  </div>
                <div class="contenedorTab3">REPRODUCTOR</div>				
	                   
			
			
					
   	
		
				
				
				
				
				

        </div>				
						
	</div>
	</div>
	
	<div id="tabs-3">
		
	<div style="width:100%; height:509px;">
    	<div id="misplaylist">
        <?PHP
        	require("buscar_misplaylist.php");
        	$usuario="leandro";
			misplaylist($usuario);
		?>
		</div>					
	</div>
	</div>
	
	
	<div id="tabs-4">
		<div style="width:100%; height:509px;"></div>
		
		
	</div>
	
	
	<div id="tabs-5">
		  
		<div style="width:100%; height:509px;"></div>		
		
		        
	</div>
	

			
			
</div>
</div>					
<div class="div1"></div>	
		</body>
</html>