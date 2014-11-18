<?php
session_start(); 
session_destroy(); //Cierra la sesión al ingresar al index
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestor CoCo</title>
	<meta name="description" content="" charset="UTF-8"/>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
	<link rel="icon" type="image/png" href="img/coquito.png" />
</head>
<body>
	<header>
		<h1>Gestor para Consejos Comunales</h1>
	</header>
	<section>
		<form method="post" action="php/validaroperador.php">
		<table>
			<tr>
				<td>Ususario<br>
					<input id="ingreso" type="text" name="usuario" value="" required>				
				</td>			
			</tr>
			<tr>
				<td>Contraseña <br>
					<input type="password" name="password" required>				
				</td>
			</tr>
			<tr>
				<td>
				<input type="submit"	value="ingresar">
				</td>
			</tr>
		</table>
		</form>
	</section>
	<footer>
	
	</footer>
</body>
</html>