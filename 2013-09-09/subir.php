<?php
$archivo = $_FILES['archivo']['tmp_name'];
copy($archivo, 'C:\\archivos\\');
echo $_POST['archivo'];
?>