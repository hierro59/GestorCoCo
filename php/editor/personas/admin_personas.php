<?php include('../../seguridad.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<script type="text/javascript" src="../../../js/borrar_campos.js"></script>
<title>Administrar Vecinos | CoCo</title>
</head>
<body>
<div id="body">
	<header>
		<img src="../../../img/LogoCabecera.png" alt="Gestor para Consejos Comunales" />
		<div id="icomenu">
		<a href="../../../index.php" id="IcoLink"><img src="../../../img/icosalir.png" alt="Salir" /></a>
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
		<table id="centrar" align="center">
			<tr>
				<td id="boton">
					<a href="nueva_persona.php" id="BotonLink">Registrar nueva persona</a>
				</td>
			</tr>
			<tr> 
				<td id="boton">
					<label for="cedula" ><h3>Consultar datos de personas</h3></label><br>
					<form method="GET" action="consultar_persona.php" name="formulario" target="ventanasola" onsubmit="window.open('', 'ventanasola', 'width=600,height=500,top=200,left=300,toolbar=no, location=no, directories=no, status=no, menubar=no ,scrollbars=yes, resizable=no')">
					<input type="text" name="cedula" required="" value="Ingrese número de cédula" id="cedula" onclick="borracampocedula()" onblur="restauracampocedula()"><br><br>
					<input type="submit" value="Consultar" class="boton2">
					</form><br>
				</td>
			</tr>		
		</table>
	</section>
	<footer>
	
	</footer>
</body>
</html>