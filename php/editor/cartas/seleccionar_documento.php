<?php

if ($_GET['seleccionar_documento']=="carta_residencia") 
	{
	header("location: carta_residencia.php?cedula=$_GET[cedula]");
}
else { header("location: carta_residencia_alquilado.php?cedula=$_GET[cedula]");}

?>