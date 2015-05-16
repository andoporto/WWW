<?php 
$arreglo_nombres=array("Mi_nombre"=>"Carlos","Tu_nombre"=>"Daya","Mi_apellido"=>"Leon","Tu_apellido"=>"Ramos"); 
$buffer='<?xml version="1.0" encoding="utf-8"?> 
           <file_xml>'; 
  while (list ($etiqueta, $valor) = each ($arreglo_nombres)): 
    $buffer.="<$etiqueta>$valor</$etiqueta>"; 
  endwhile; 
  $buffer.="</file_xml>"; 
  $file=fopen("archivo.xml","w+"); 
  fwrite ($file,$buffer); 
  fclose($file); 
?>