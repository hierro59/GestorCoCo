<?php include('../seguridad_root.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/estilo.css" type="text/css">
<script type="text/javascript" src="../../js/funciones.js"></script>
<link rel="icon" type="image/png" href="../../img/coquito.png" />
<title>Administrar Usuarios | Gestor Social</title>
</head>
<body>
<div id="body">
	<header>
		<img src="../../img/LogoCabecera.png" alt="Gestor para Consejos Comunales" id="logoCabecera"/>
		<div id="icomenu">
		<a href="../../index.php"><img src="../../img/icosalir.png" alt="Salir" /></a>
		</div>
		<div id="icomenu">
		<a href="principal.php"><img src="../../img/inicio.png" alt="Salir" /></a>
		</div>
    </header>
	<section>
		<form action="" name="formulario" method="post" onsubmit="return confirmar();">
		<table class="vecino" align="center">
			<tr>
				<td id="item">
				<h3>Editar</h3>
				</td>
				<td id="item">
				<h3>Codigo</h3>
				</td>
				<td id="item">
				<h3>Nombre</h3>
				</td>
				<td id="item">
				<h3>Usuario</h3>
				</td>
			</tr>
    	<?php

include('../bd_conexion.php');

$rst_usuarios=mysqli_query($conexion,"SELECT * FROM usuarios") or die ("Problemas en el select:".mysql_error());

while ($reg=mysqli_fetch_array($rst_usuarios)) 						//Listamos y ordenamos los registros.
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

		<input id="botonGris" type="button" value="Cancelar" onClick="location.href='principal.php'" />
		<input id="botonGris" type="submit" value="Editar" onClick="document.formulario.action='editar_usuario.php'; document.formuario.submit()"/>
		<input id="botonGris" type="submit" value="Eliminar" onClick="document.formulario.action='eliminar_usuario.php'; document.formuario.submit()" />
		<input id="botonGris" type="button" value="Nuevo usuario" onClick="location.href='nuevo_usuario.php'" />
		</td>
		
	</tr>
	</table>
	</form>
    </section>
    </div>
</body>
</html>
