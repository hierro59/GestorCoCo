<?php

//Al crear la tabla "consejo_comunal" en la base de datos se debe colocar el valor "1" en la columna "codigo_coco" para que este script funcione

header("Content-Type: text/html;charset=utf-8");
include("../../php/bd_conexion.php");
include("../../php/consultar_mi_coco.php");

mysqli_query("SET NAMES 'utf8'");


mysqli_query($conexion,"update consejo_comunal set 
numero_registro= '$_REQUEST[numero_registro]',
nombre_coco= '$_REQUEST[nombre_coco]',
direccion_coco= '$_REQUEST[direccion_coco]',
rif_coco='$_REQUEST[rif_coco]'") 

or die ("Problemas en el select ".mysqli_error()."vamos mal");

header("Location: mi_consejo_comunal.php");

?>