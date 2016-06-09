<?php

include('bd_conexion.php');

mysqli_query("SET NAMES 'utf8'");

$rst_mi_coco=mysqli_query($conexion,"SELECT * FROM consejo_comunal") or die ("Problemas en el select:".mysql_error());

$reg_mi_coco=mysqli_fetch_array($rst_mi_coco);

?>
