<?php
$conexion=mysql_connect("localhost","root","Atunis2716") or die("Problemas en la conexión"); //Se conecta con la base de datos.
mysql_select_db("bd_coco",$conexion) or die("Problemas en la selección de la base de datos"); //Selecciona la base de datos.
?>