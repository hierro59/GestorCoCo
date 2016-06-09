<!DOCTYPE HTML>
<html>
<head>
		<title>Registro exitoso | CoCo</title>
		<meta name="description" content="" charset="UTF-8"/>
	<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
</head>
	<body>
	<header>
		<img src="../../../img/LogoCabecera.png" alt="Gestor para Consejos Comunales" />
		<div id="icomenu">
		<a href="../../../index.php"><img src="../../../img/icosalir.png" alt="Salir" /></a>
		</div>
<?php		
		
if($_SESSION['tipo_usuario']=="1") {
	
echo	"<div id='icomenu'>
		<a href='../../root/principal.php'><img src='../../../img/inicio.png' alt='Salir' /></a>
		</div>";
		}
else {
	echo	"<div id='icomenu'>
		<a href='../principal_editor.php'><img src='../../../img/inicio.png' alt='Salir' /></a>
		</div>";
		}
		
?>
	</header>
		<section>
			<table  align="center">
				<tr>
					<td>
					<h3>Persona registrada con</h3>
					<h1>¡ÉXITO!</h1>
					</td>
				</tr>
				<tr>
					<td>
						<input id="botonGris" type="button" value="Cerrar" onClick="location.href='admin_personas.php'">
					</td>
				</tr>
			</table>
		</section>
		<footer>
		</footer>
	</body>
</html>