<?php

include('bd_conexion.php');

mysql_query("SET NAMES 'utf8'");

$rst_personas=mysql_query("SELECT * FROM personas where cedula='$_GET[cedula]'") or die ("Problemas en el select:".mysql_error());

$reg=mysql_fetch_array($rst_personas);

?>
