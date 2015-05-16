<?php
class Persona {
	private $nombre;
	public function inicializar($nom) {
		$this->nombre = $nom;
	}
	public function imprimir() {
		echo $this->nombre;
		echo '<br />';
	}
}
$persona1 = new Persona();
$persona1->inicializar('Juan');
$persona1->imprimir();
$persona2 = new Persona();
$persona2->inicializar('Marcelo');
$persona2->imprimir();
$persona3 = new Persona();
$persona3->inicializar('María');
$persona3->imprimir();
?>