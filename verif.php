<?PHP
	$usu=$_POST['usuario'];
	if($usu=="root")
	{
		session_start();
		$_SESSION['log']=1;
		header('Location:2.php');
	}
	else
	{header('Location:2.php');
	}
		
	
	?>
