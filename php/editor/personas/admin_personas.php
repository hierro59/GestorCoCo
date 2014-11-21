<?php include('../../seguridad.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<title>Administrar personas | CoCo</title>
</head>
<body>
<div id="body">
	<header>
		<a href="../principal_editor.php">Inicio</a>
		<a href="../../../index.php">Salir</a>
   </header>
	<section id="">
	
	<table>
	<tr>
	<td>
		<a href="nueva_persona.php">Registrar nueva persona</a><br>
	</td>
	</tr>
	<tr>
	<td>Editar persona existente</td>
	<td>
		<form method="post" action="editar_persona.php">
		Ingrese número de cédula:<br>
			<input type="text" name="cedula" required="">
			<input type="submit" value="Editar">
		</form>
	</td>
	</tr>		
	</table>
	</section>
	<footer>
	
	</footer>
</body>
</html>