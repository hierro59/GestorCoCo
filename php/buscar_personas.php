<?php

include('bd_conexion.php');

mysqli_query("SET NAMES 'utf8'");

$rst_personas=mysqli_query($conexion,"SELECT * FROM personas where cedula='$_GET[cedula]'") or die ("Problemas en el select:".mysql_error());

$reg=mysqli_fetch_array($rst_personas);

?>
