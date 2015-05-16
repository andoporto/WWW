<?php
class Opcion {
	private $titulo;
	private $enlace;
	private $colorFondo;
	public function __construct($tit, $enl, $cfon) {
		$this->titulo = $tit;
		$this->enlace = $enl;
		$this->colorFondo = $cfon;
	}
	public function graficar() {
		echo '<a href="' . $this->enlace . '" style="background-color: ' . $this->colorFondo . ';">' . $this->titulo . '</a>';
	}
}
class Menu {
	private $opciones = array();
	private $direccion;
	public function __construct($dir) {
		$this->direccion = $dir;
	}
	public function insertar($op) {
		$this->opciones[] = $op;
	}
	private function graficarHorizontal() {
		for ($f = 0; $f < count($this->opciones); $f++) {
			$this->opciones[$f]->graficar();
		}
	}
	private function graficarVertical() {
		for ($f = 0; $f < count($this->opciones); $f++) {
			$this->opciones[$f]->graficar();
			echo '<br />';
		}
	}
	public function graficar() {
		if (strtolower($this->direccion) == 'horizontal') {
			$this->graficarHorizontal();
		} else if (strtolower($this->direccion) == 'vertical') {
			$this->graficarVertical();
		}
	}
}
?>