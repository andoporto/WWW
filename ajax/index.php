<html>
<head>
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


function busca() {	
		var strURL="2.php?lab="+document.getElementById("opt").value;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {		
						document.getElementById('valores').innerHTML=req.responseText;
 					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
}

function mostrar(){
	var option = document.getElementById("opt").value;
	alert (option);
}
</script>
</head>
<body>
<?PHP
$conn = mysql_connect("localhost","root");
mysql_select_db("prueba",$conn);
$res = mysql_query("select * from laboratorio",$conn);


echo "<select id='opt' onchange='busca()'>";
while($fila=mysql_fetch_row($res)){
echo "<option value='".$fila[0]."'>".$fila[1]."</option>";
}
echo "<select>";


?>
<div id="valores"></div>
</body>
</html>