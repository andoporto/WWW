<html>
	<body>
	<h2>Registrate</h2>
	<form action="" method="POST">
		<p><label for="username">Username: </label><br>
		<input type="text" name="username"></p>
		<p><label for="email">Email: </label><br>
		<input type="text" name="email"></p>
		<p><label for="pass1">Password: </label><br>
		<input type="password" name="pass1"></p>
		<p><label for="pass2">Repite el password: </label><br>
		<input type="password" name="pass2"></p>
		<p><label for="web">Ingresa tu sitio web: </label><br>
		<input type="text" name="web"></p>
		<p><input type="submit" value="Registrarse" name="submit"></p>
	</form>
	<?php
		if(isset($_POST["submit"]))
		{
			$username = trim($_POST["username"]);
			$email = trim($_POST["email"]);
			$pass1 = trim($_POST["pass1"]);
			$pass2 = trim($_POST["pass2"]);
			$web = trim($_POST["web"]);
			$response = array();
			if($username == "" or $email == "" or $pass1 == "" or $pass2 == "" or $web=="")
				$response[] = "Debes completar todos los campos";
			if((strlen($username) < 5)||(strlen($username) > 10))
				$response[] ="El nombre debe tener entre 5 y 10 caracteres";
			if(!(filter_var($username, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z]*$/"))))) 
				$response[]="Se deben ingresar solo letras";
			if(!filter_var($email,FILTER_VALIDATE_EMAIL ))
				$response[] = "El email no es valido";
			if(!is_numeric($pass1))
				$response[]="Debe tener solo numeros";
			if(!is_numeric($pass2))
				$response[]="Debe tener solo numeros";
			if($pass1 != $pass2)
				$response[] = "Los password deben coincidir";
			if(!filter_var($web,FILTER_VALIDATE_URL ))
				$response[] = "La url no es valida";
			if(empty($response)) 
				echo "Los datos son validos"; 
			else
			{
				foreach($response as $r) 
				echo "Errores: ".$r."<br>"; 
			}
		}
	?>
	</body>
</html>