<?php
class Cadena {
	public static function largo($cad) {
		return strlen($cad);
	}
	public static function mayusculas($cad) {
		return strtoupper($cad);
	}
	public static function minusculas($cad) {
		return strtolower($cad);
	}
}
$c = 'Hola Mundo!';
echo 'Cadena original: ' . $c;
echo '<br />';
echo 'Largo: ' . Cadena::largo($c);
echo '<br />';
echo 'Toda en may�sculas: ' . Cadena::mayusculas($c);
echo '<br />';
echo 'Toda en min�sculas: ' . Cadena::minusculas($c);
?>