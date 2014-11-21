<?php
include('../seguridad_root.php');
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
		<a href="../../index.php">Salir</a>
		<a href="principal.php">Inicio</a>
    	</header>
		<section>
			<table>
				<tr>
					<td>Numero de registro
						<?php echo $reg_mi_coco['numero_registro'];?>
					</td>				
					<td>Nombre Consejo Comunal
						<?php echo $reg_mi_coco['nombre_coco'];?>
					</td>
				</tr>
				<tr>
					<td>Dirección Consejo Comunal
						<?php echo $reg_mi_coco['direccion_coco'];?>
					</td>
					<td>Numero Registro Fiscal
						<?php echo $reg_mi_coco['rif_coco'];?>
					</td>
				</tr>
			</table>
			<a href="editar_mi_coco.php">Editar datos |</a>
			<a href="#">Imprimir |</a>
			<a href="principal.php">Volver</a>
		</section>    
    <footer>
	 </footer>
	</body>
</html>