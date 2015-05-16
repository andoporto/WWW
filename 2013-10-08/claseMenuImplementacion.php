<?php
require('claseMenu.php');
$menu1 = new Menu('vertical');
$opcion1 = new Opcion('Google', 'http://www.google.com.ar/', '#FCC');
$menu1->insertar($opcion1);
$opcion2 = new Opcion('C5N', 'http://www.c5n.com/', '#6CF');
$menu1->insertar($opcion2);
$opcion3 = new Opcion('Telefe', 'http://www.telefe.com/', '#CCC');
$menu1->insertar($opcion3);
$menu1->graficar();
?>