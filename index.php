<?php
session_start(); 
session_destroy(); //Cierra la sesión al ingresar al index
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestor CoCo</title>
	<meta name="description" content="" charset="UTF-8"/>
	<link rel="stylesheet" href="css/estilo.css" type="text/css" />
	<link rel="icon" type="image/png" href="img/coquito.png" />
</head>
<body id="body-index">
<div id="center">
	<div id="centrar_logo">
		
		<img src="img/LogoIndex.png" alt="Gestor CoCo" />
	
	</div>
	<section>
		<div id="centrar_ingreso">
		<form method="post" action="php/validaroperador.php">
		<table id="index">
			<tr>
				<td>Ususario<br>
					<input id="" type="text" name="usuario" value="" required>				
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
		</div>
	</section>
	</div>
	<footer>
	
	</footer>
</body>
</html>