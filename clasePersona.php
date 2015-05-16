<?php
class Persona {
	var $nombre;
	function ponerNombre($elNombre) {
		$this->nombre = $elNombre;
	}
	function Persona() {
		$nombre = "";
	}
	function __destruct() {
		echo "destructor";
	}
}
$p1 = new Persona;
$p1->ponerNombre("Aquiles");
?>