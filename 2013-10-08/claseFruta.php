<?php
class Fruta {
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
?>