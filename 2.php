<?PHP
session_start();
if(!isset($_SESSION['log']))
	{
	echo "usted no esta registrado";
	}
	else
	{echo "Buen dia".$_SESSION['log'];
	}
?>