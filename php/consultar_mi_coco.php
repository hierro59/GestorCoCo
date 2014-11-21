<?php

include('bd_conexion.php');

mysql_query("SET NAMES 'utf8'");

$rst_mi_coco=mysql_query("SELECT * FROM consejo_comunal") or die ("Problemas en el select:".mysql_error());

$reg_mi_coco=mysql_fetch_array($rst_mi_coco);

?>
