<?php
$cedula=$_REQUEST['cedula'];
header("Content-Type: text/html;charset=utf-8");
include('../../../php/bd_conexion.php');
mysqli_query("SET NAMES 'utf8'");
mysqli_query($conexion,"update personas set 
nombres='$_REQUEST[nombres]',
apellidos='$_REQUEST[apellidos]',
fecha_nacimiento='$_REQUEST[fecha_nacimiento]',
cedula='$_REQUEST[cedula]',
nacionalidad='$_REQUEST[nacionalidad]',
cne='$_REQUEST[cne]',
sexo='$_REQUEST[sexo]',
estado_civil='$_REQUEST[estado_civil]',
discapacidad='$_REQUEST[discapacidad]',
describe_discapacidad='$_REQUEST[describe_discapacidad]',
tlf_movil='$_REQUEST[tlf_movil]',
tlf_habitacion='$_REQUEST[tlf_habitacion]',
tlf_trabajo='$_REQUEST[tlf_trabajo]',
correo='$_REQUEST[correo]',
sector='$_REQUEST[sector]',
calle='$_REQUEST[calle]',
casa_numero='$_REQUEST[casa_numero]',
ciudad='$_REQUEST[ciudad]',
municipio='$_REQUEST[municipio]',
estado='$_REQUEST[estado]',
profesion='$_REQUEST[profesion]',
trabaja='$_REQUEST[trabaja]',
pensionado='$_REQUEST[pensionado]',
ingreso_mensual='$_REQUEST[ingreso_mensual]',
nivel_instruccion='$_REQUEST[nivel_instruccion]',
clasificacion_ingreso='$_REQUEST[clasificacion_ingreso]',
hijos='$_REQUEST[hijos]',
habilidades='$_REQUEST[habilidades]',
donde_trabaja='$_REQUEST[donde_trabaja]',
otro_donde_trabaja='$_REQUEST[otro_donde_trabaja]',
actividad_economica_casa='$_REQUEST[actividad_economica_casa]',
que_vende_en_casa='$_REQUEST[que_vende_en_casa]',
Cancer='$_REQUEST[Cancer]',
SIDA='$_REQUEST[SIDA]',
Hepatitis='$_REQUEST[Hepatitis]',
Epilepsia='$_REQUEST[Epilepsia]',
Diabetes='$_REQUEST[Diabetes]',
Corazon='$_REQUEST[Corazon]',
Leucemia='$_REQUEST[Leucemia]',
Tuberculosis='$_REQUEST[Tuberculosis]',
Hipertension='$_REQUEST[Hipertension]',
Asma='$_REQUEST[Asma]',
otra_enfermedad='$_REQUEST[otra_enfermedad]',
ayuda_especial='$_REQUEST[ayuda_especial]',
describa_ayuda='$_REQUEST[describa_ayuda]',
org_comu='$_REQUEST[org_comu]',
las_org_comu='$_REQUEST[las_org_comu]',
participa_org_comu='$_REQUEST[participa_org_comu]',
robinson='$_REQUEST[robinson]',
ribas='$_REQUEST[ribas]',
sucre='$_REQUEST[ribas]',
mercal='$_REQUEST[mercal]',
barrio_adentro='$_REQUEST[barrio_adentro]',
identidad='$_REQUEST[identidad]',
nevado='$_REQUEST[nevado]',
vivienda='$_REQUEST[vivienda]',
otra_mision='$_REQUEST[otra_mision]',
encuesta01='$_REQUEST[encuesta01]',
encuesta02='$_REQUEST[encuesta02]',
encuesta03='$_REQUEST[encuesta03]'
where cedula='$_REQUEST[cedula]'") or die ("Problemas al actualizar ".mysql_error()." vamos mal");
header("Location: consultar_persona.php?cedula=$cedula");

?>