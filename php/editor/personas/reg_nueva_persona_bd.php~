<?php

include('../../seguridad.php');
include('../../bd_conexion.php');
mysql_set_charset('utf8');

mysql_query("insert into personas
(nombres,
apellidos,
cedula,
estado_civil,
fecha_nacimiento,
nacionalidad,
sexo,
sector,
calle,
casa_numero,
ciudad,
municipio,
estado,
fecha_adquisicion_vivienda,
tlf_movil,
tlf_habitacion,
correo,
profesion,
nivel_academico,
labora,
hijos) 
value('$_REQUEST[nombres]',
'$_REQUEST[apellidos]',
'$_REQUEST[cedula]',
'$_REQUEST[estado_civil]',
'$_REQUEST[fecha_nacimiento]',
'$_REQUEST[nacionalidad]',
'$_REQUEST[sexo]',
'$_REQUEST[sector]',
'$_REQUEST[calle]',
'$_REQUEST[casa_numero]',
'$_REQUEST[ciudad]',
'$_REQUEST[municipio]',
'$_REQUEST[estado]',
'$_REQUEST[fecha_adquisicion_vivienda]',
'$_REQUEST[tlf_movil]',
'$_REQUEST[tlf_habitacion]',
'$_REQUEST[correo]',
'$_REQUEST[profesion]',
'$_REQUEST[nivel_academico]',
'$_REQUEST[labora]',
'$_REQUEST[hijos]')") or die("Problemas en el select ".mysql_error()." <a href='nueva_persona.php'>Volver</a>");
	mysql_close($conexion);
header("Location: registro_persona_exitoso.php");
	
?>
