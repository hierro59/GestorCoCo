<?php
include('../seguridad_root.php');
include('../consultar_mi_coco.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/estilo.css" type="text/css">
<script type="text/javascript" src="../../js/funciones.js"></script>
<link rel="icon" type="image/png" href="../../img/coquito.png" />
<title>Editar mi Consejo Comunal | CoCo</title>
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
		<form method="POST" action="update_coco.php" onsubmit="return confirmar();">
			<table class="vecino" align="center">
				<tr>
					<td>Numero de registro
						<input type="text" name="numero_registro" value="<?php echo $reg_mi_coco['numero_registro'];?>" />
					</td>				
					<td>Nombre Consejo Comunal
						<input type="text" name="nombre_coco" value="<?php echo $reg_mi_coco['nombre_coco'];?>" />
					</td>
				</tr>
				<tr>
					<td>Dirección Consejo Comunal
						<input type="text" name="direccion_coco" value="<?php echo $reg_mi_coco['direccion_coco'];?>" />
					</td>				
					<td>Numero Registro Fiscal
						<input type="text" name="rif_coco" value="<?php echo $reg_mi_coco['rif_coco'];?>" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
			<input id="botonGris" type="button" value="Cancelar" onClick="location.href='mi_consejo_comunal.php'"/>
			<input type="hidden" name="codigo_coco" value="1" />
			<input id="botonGris" type="submit" value="Grabar datos" />
					</td>
				</tr>
			</table>
		</form>
		</section>    
    <footer>
	 </footer>
	</body>
</html>