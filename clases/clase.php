<?PHP
	class BD {
		public $servidor;
		public $usuario;
		public $pass;
		
		
		function conectar() {
			$this->$conn = mysql_connect('localhost','root','');
			mysql_select_db('prueba',$this->$conn);
		}
	
		function ejecutar() {
			

			$res=mysql_query('select * from productos',$this->$conn);
			
			$cant=mysql_num_rows($res);



			$fila=mysql_fetch_array($res);

			echo $fila[1]."".$fila[2]."<br>";


			$fila=mysql_fetch_array($res);

			echo $fila[1]."".$fila[2];
		}
	}
?>