<?php

include('../../buscar_personas.php');

if ($_GET['cedula']==$reg['cedula']) {

	if ($_GET['seleccionar_documento']=="carta_residencia") 
	{
		header("location: carta_residencia.php?cedula=$_GET[cedula]");
	}
	else { header("location: carta_residencia_alquilado.php?cedula=$_GET[cedula]");}
}

else {header("location: emitir_cartas.php");}
?>
