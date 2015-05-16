<?PHP
	$n=$_POST["nombre"];
	$a=$_POST["dia"];
	
	switch($a){
	case'mañana':
	echo "buen dia";
	break;
	case'tarde':
	echo "buenas tardes";
	break;
	case'noche':
	echo "buenas noches";
	default:
	echo "Seleccione una opcion";
	}
			
?>