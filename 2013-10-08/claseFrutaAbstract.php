<?php
/*
Las clases abstractas son aquellas que no pueden ser distanciadas, y se utilizan para definir un modelo de jerarquía. Generalmente sirven de base para otras que luego heredan de la super clase abstracta.
*/
abstract class Fruta {
	private $nombre;
	public function comer() {
		echo 'Buen provecho!';
	}
}
class Manzana extends Fruta {
	public function comer() {
		echo 'Que disfrutes tu manzana Newton!';
	}
}
$manzana = new Fruta();
$manzana->comer();
?>