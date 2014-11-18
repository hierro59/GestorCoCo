<?php include('../seguridad_root.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../img/coquito.png" />
<title>Administrar Usuarios | CoCo</title>
</head>
<body>
<div id="body">
	<header>
		<a href="../../index.php">Salir</a>
		<a href="principal.php">Inicio</a>
       
    </header>
	<section>
		<form action="editar_usuario.php" method="post">
		<table>
			<tr>
				<td>
				<h3>Editar</h3>
				</td>
				<td>
				<h3>Codigo</h3>
				</td>
				<td>
				<h3>Nombre</h3>
				</td>
				<td>
				<h3>Usuario</h3>
				</td>
			</tr>
    	<?php

include('../bd_conexion.php');

$rst_usuarios=mysql_query("SELECT * FROM usuarios") or die ("Problemas en el select:".mysql_error());

while ($reg=mysql_fetch_array($rst_usuarios)) 						//Listamos y ordenamos los registros.
	{echo "<tr>".
			"<td>".
			"<input type='radio' name='codigo' value='".$reg['codigo']."'>".
			"</td>".
			"<td>".
			$reg['codigo'].
			"</td>".
			"<td>".
			$reg['nombre'].
			"</td>".
			"<td>".
			$reg['usuario'].
			"</td>".
			"</tr>";}
?>
	<tr >
		<td colspan="4">
		<input type="submit" value="Editar" />
		</td>
		<td><a href="nuevo_usuario.php">Nuevo usuario</a> </td>
	</tr>
	</table>
	</form>
    </section>
    </div>
</body>
</html>
