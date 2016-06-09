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
					<a href="nueva_persona.php" id="BotonLink">Registrar <br> nueva persona</a>
				</td>
				<td id="boton">					
					<a href="consultarlos_todos.php" id="BotonLink">Verlos todos</a>
				</td>
			
				<td id="boton">
					<a href="busqueda_avanzada.php" id="BotonLink">Consulta <br> avanzada</a>
				</td>
			</tr>
			<tr>
				<td colspan="3" id="boton">
					<label for="cedula" ><h3>Consultar datos <br> de personas</h3></label><br>
						<form method="GET" action="consultar_persona.php" name="formulario">
							<input type="text" name="cedula" required value="Ingrese número de cédula" id="cedula" onclick="borracampocedula()" onblur="restauracampocedula()"><br><br>
							<input type='hidden' name='anterior' value='admin_personas.php'>
							<input type="submit" value="Consultar" class="boton2">
						</form>
				</td>
			</tr>
		</table>
	</section>
	<footer>
	
	</footer>
</body>
</html>