<?php

include('../seguridad_root.php');
echo "por aqui";
include('../consultar_mi_coco.php');

?>
<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../../css/estilo.css" type="text/css">
	<link rel="icon" type="image/png" href="../../img/coquito.png" />
	<title>Mi Consejo Comunal | CoCo</title>
</head>

<body>
	<header>
		<img src="../../img/LogoCabecera.png" alt="Gestor para Consejos Comunales" />
		<div id="icomenu">
			<a href="../../index.php"><img src="../../img/icosalir.png" alt="Salir" /></a>
		</div>
		<div id="icomenu">
			<a href="principal.php"><img src="../../img/inicio.png" alt="Salir" /></a>
		</div>
	</header>
	<section>
		<table class="vecino" align="center">
			<tr>
				<td>
					<h4>Numero de registro:</h4>
					<?php echo $reg_mi_coco['numero_registro']; ?>
				</td>
				<td>
					<h4>Nombre:</h4>
					<?php echo $reg_mi_coco['nombre_coco']; ?>
				</td>
			</tr>
			<tr>
				<td>
					<h4>Dirección:</h4>
					<?php echo $reg_mi_coco['direccion_coco']; ?>
				</td>
				<td>
					<h4>Numero Registro Fiscal:</h4>
					<?php echo $reg_mi_coco['rif_coco']; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input id="botonGris" type="button" value="Cancelar" onClick="location.href='principal.php'" />
					<input id="botonGris" type="button" value="Editar datos" onClick="location.href='editar_mi_coco.php'" />
				</td>
			</tr>
		</table>

	</section>
	<footer>
	</footer>
</body>

</html>