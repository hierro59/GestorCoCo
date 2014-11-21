<?php
header("Content-Type: text/html;charset=utf-8");
include("../../../php/bd_conexion.php");
mysql_query("SET NAMES 'utf8'");
$codigo=($_REQUEST['codigo_persona']);

mysql_query("update personas set 
nombres='$_REQUEST[nombres]',
apellidos='$_REQUEST[apellidos]',
cedula='$_REQUEST[cedula]',
estado_civil='$_REQUEST[estado_civil]',
fecha_nacimiento='$_REQUEST[fecha_nacimiento]',
nacionalidad='$_REQUEST[nacionalidad]',
sexo='$_REQUEST[sexo]',
sector='$_REQUEST[sector]',
calle='$_REQUEST[calle]',
casa_numero='$_REQUEST[casa_numero]',
ciudad='$_REQUEST[ciudad]',
municipio='$_REQUEST[municipio]',
estado='$_REQUEST[estado]',
fecha_adquisicion_vivienda='$_REQUEST[fecha_adquisicion_vivienda]',
tlf_movil='$_REQUEST[tlf_movil]',
tlf_habitacion='$_REQUEST[tlf_habitacion]',
correo='$_REQUEST[correo]',
profesion='$_REQUEST[profesion]',
nivel_academico='$_REQUEST[nivel_academico]',
labora='$_REQUEST[labora]',
hijos='$_REQUEST[hijos]'
where codigo_persona=$codigo") or die ("Problemas en el select ".mysql_error()."vamos mal");

header("Location: registro_persona_exitoso.php");
?>
