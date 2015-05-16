<?php
$conexion = mysql_connect('localhost:3306', 'root', '');/* Para que no se ponga lento todo, en producción definiría explícitamente el puerto donde anda MySQL */
mysql_select_db('test');
/*mysql_query('insert into amigos values (7, "Aquiles", "Brinco", "aquilesbrinco@localhost")');*/
$consulta = mysql_query('select * from amigos order by apellido asc, nombre asc');
while ($columna = mysql_fetch_assoc($consulta)) {
	echo '<p>' . $columna['idAmigo'] . ', ' . $columna['nombre'] . ' ' . $columna['apellido'] . ', ' . $columna['email'] . "</p>\n";
}
?>