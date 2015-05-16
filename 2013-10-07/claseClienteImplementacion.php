<?php
require('claseCliente.php');
$cliente = new Cliente('admin@localhost.test', 12345678);
echo '<pre>';
print_r($cliente->verCliente());
echo '</pre>';
unset($cliente);
?>