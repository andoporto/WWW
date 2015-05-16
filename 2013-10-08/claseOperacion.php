<?php
class Operacion {
	protected $valor1;
	protected $valor2;
	protected $resultado;
	public function cargar1($v){
		$this->valor1 = $v;
	}
	public function cargar2($v) {
		$this->valor2 = $v;
	}
	public function imprimirResultado() {
		echo $this->resultado . '<br>';
	}
}
class Suma extends Operacion {
	public function operar() {
		$this->resultado = $this->valor1 + $this->valor2;
	}
}
class Resta extends Operacion {
	public function operar() {
		$this->resultado = $this->valor1 - $this->valor2;
	}
}
?>