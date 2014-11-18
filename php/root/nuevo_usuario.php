<?php
include('root.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../img/coquito.png" />
<title>Nuevo Usuario | CoCo</title>
</head>
	<body>
		<header>
		<a href="../../index.php">Salir</a>
		<a href="principal.php">Inicio</a>
    </header>
		<section>
			<form action="regnubd.php" method="post" target="ventanasola" onsubmit="window.open('', 'ventanasola', 'width=400,height=300,top=200,left=300,toolbar=no, location=no, directories=no, status=no, menubar=no ,scrollbars=no, resizable=no')">
			<table align="center" border="solid">
				<th colspan="2">
					Ingrese los datos del nuevo usuario
				</th>
				<tr>
					<td>
						Nombres y apellidos
					</td>
					<td>
						<input type="text" name="nombre" required>
					</td>	
				</tr>
				<tr>
					<td>
						Usuario			
					</td>
					<td>
						<input type="text" name="usuario" required>
					</td>
				</tr>
				<tr>
					<td>
						Contraseña			
					</td>
					<td>
						<input type="password" name="password" required>
					</td>
				</tr>
				<tr>
					<td>
						Repita contraseña			
					</td>
					<td>
						<input type="password" name="password2" required>
					</td>
				</tr>
				<tr>
					<td>
						Tipo de usuario			
					</td>
					<td>
						<input type="radio" name="tipo_usuario" value="1">Root
						<input type="radio" name="tipo_usuario" value="2">Editor
							
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="button" value="Cancelar" onClick="location.href='admin_usuario.php'">
						<input type="reset" value="Limpiar">
						<input type="submit" value="Registrar">
					</td>
				</tr>
			</table>
			</form>
		</section>
		<footer>
		</footer>
	</body>
</html>
