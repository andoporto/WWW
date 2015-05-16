<?php
class Menu {
	private $enlaces = array();
	private $titulos = array();
	public function cargarOpcion($en, $tit) {
		$this->enlaces[] = $en;
		$this->titulos[] = $tit;
	}
	public function mostrar() {
		echo '<ul>';
		for ($f = 0; $f < count($this->enlaces); $f++) {
			echo '<li><a href="' . $this->enlaces[$f] . '">' . $this->titulos[$f] . '</a></li>';
		}
		echo '</ul>';
	}
}
$menu1 = new Menu();
$menu1->cargarOpcion('http://www.google.com.ar/', 'Google');
$menu1->cargarOpcion('http://www.telefe.com/', 'Telefe');
$menu1->cargarOpcion('http://www.c5n.com/', 'C5N');
$menu1->cargarOpcion('http://www.minutouno.com/', 'MinutoUno');
$menu1->cargarOpcion('http://httpd.apache.org/', 'Apache HTTP Server');
$menu1->cargarOpcion('http://www.php.net/', 'PHP');
$menu1->cargarOpcion('http://www.mysql.com/', 'MySQL');
$menu1->mostrar();
?>