<?php
include('../seguridad_root.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/estilo.css" type="text/css">
<script type="text/javascript" src="../../js/funciones.js"></script>
<link rel="icon" type="image/png" href="../../img/coquito.png" />
<title>Nuevo Usuario | CoCo</title>
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
			<form action="" method="post" name="formulario" onsubmit="return confirmar();">
			<table class="vecino" align="center" border="solid">
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
						<input id="botonGris" type="button" value="Cancelar" onClick="location.href='admin_usuario.php'">
						<input id="botonGris" type="reset" value="Limpiar">
						<input id="botonGris" type="submit" value="Registrar" onClick="document.formulario.action='regnubd.php'; document.formuario.submit()">
					</td>
				</tr>
				<th colspan="2"> <?php
if($_SERVER["QUERY_STRING"]=="error")
{
echo "<span style='color:blue;font-size:30px;'>  Las contraseñas no coinciden </span> " ;
}
?></th>
			</table>
			</form>
		</section>
		<footer>
		</footer>
	</body>
</html>
