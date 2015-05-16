<?php
require('claseOperacion.php');
$suma = new Suma();
$suma->cargar1(10);
$suma->cargar2(10);
$suma->operar();
echo 'El resultado de la suma de 10+10 es: ';
$suma->imprimirResultado();
$resta = new Resta();
$resta->cargar1(10);
$resta->cargar2(5);
$resta->operar();
echo 'El resultado de la resta de 10-5 es: ';
$resta->imprimirResultado();
?>