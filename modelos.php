<html>
<head>
</head>
<body>
<form action="mostrar-marca-modelo.php" method="post">
<input type="hidden" name="marca"
<select name='modelo'>
<?PHP
	$a=$_POST["marca"];
	echo $a;
	
	switch($a){
	case'Ford':
	
	echo "<option>ka</option>";
	echo "<option>fiesta</option>";
	echo "<option>focus</option>";
	
	break;
	case'Fiat':
	
	echo "<option>siena</option>";
	echo "<option>palio</option>";
	echo "<option>uno</option>";
	echo "</selct>";
	break;
	case'Renault':
	
	echo "<option>12</option>";
	echo "<option>9</option>";
	echo "<option>clio</option>";
	
	
	}

?>
</select>
</form>
<input type="submit" value="IR">
			
</body>
</html>