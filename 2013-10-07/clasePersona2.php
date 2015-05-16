<?php
class Persona {
	private $nombre;
	public function inicializar($nom) {
		$this->nombre = $nom;
	}
	public function imprimir() {
		echo '<p>' . $this->nombre . '</p>';
	}
}
$persona1 = new Persona();
$persona1->inicializar('Chico Gaga');
$persona1->imprimir();
?>