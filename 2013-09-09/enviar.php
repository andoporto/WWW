<?php
echo $_REQUEST['nombre'];
echo ', ';
echo $_REQUEST['pais'];
if (isset($_REQUEST['checkbox'])) {
	echo ', ';
	echo $_REQUEST['checkbox'];
}
?>