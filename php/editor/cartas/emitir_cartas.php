<?php include('../../seguridad.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<title>Emitir cartas | CoCo</title>
</head>
<body>
<div id="">
	<header>
		<a href="../principal_editor.php">Inicio</a>
		<a href="../../../index.php">Salir</a>
   </header>
	<section id="">
		<form method="GET" action="seleccionar_documento.php">
			Introduzca número de cédula<br>
			<input type="text" name="cedula" required>
			<select name="seleccionar_documento">
				<option value="carta_residencia">Carta de residencia</option>
				<option value="carta_alquilado">Carta alquilado</option>
			</select>
			<input type="submit" value="Generar documento">
		
		
		</form>
	</section>
	<footer>
		
	</footer>
</body>
</html>