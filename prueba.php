<?php
echo '<table width="100%" border="1"><caption>Tabla</caption>';
for ($i = 1; $i <= 50; $i++) {
	echo "\n<tr>";
	for ($j = 1; $j <= 20; $j++) {
		echo "\n<td>";
		echo $j . " x " . $i;
		echo "</td>\n";
	}
	echo "</tr>\n";
}
echo '</table>';
?>