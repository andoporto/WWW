<?php
class Vehiculo {
	private $patente;
	private $origen;
	private $anio;
	function __construct($patente, $origen, $anio) {
		$this->patente = $patente;
		$this->origen = $origen;
		$this->anio = $anio;
	}
	public function verPatente() {
		return $this->patente;
	}
}
/* Ejemplo */
$fiorino = new Vehiculo('DFR 970', 'B', '2000');
echo $fiorino->verPatente();
echo '<br><br>';
/* extender */
class Avion extends Vehiculo {
	private $plazas;
	function __construct($patente, $origen, $anio, $plazas) {
		parent::__construct($patente, $origen, $anio);
		$this->plazas = $plazas;
	}
}
/* Ejemplo */
$avion = new Avion('ABC 123', 'B', '2000', '10');
echo $avion->verPatente();
?>