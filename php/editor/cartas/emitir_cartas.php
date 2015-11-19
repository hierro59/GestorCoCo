<?php include('../../seguridad.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<script type="text/javascript" src="../../../js/borrar_campos.js"></script>
<title>Emitir cartas | CoCo</title>
</head>
<body>
<div id="">
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
	<section id="">
	
		<table class="vecino" align="center">
		<form method="GET" action="seleccionar_documento.php" name="formulario">
			<th>
				<h3>Emitir carta de residencia</h3>			
			</th>
			<tr>
				<td><br>
					<input type="text" name="cedula" required value="Ingrese número de cédula" id="cedula" onclick="borracampocedula()" onblur="restauracampocedula()"><br><br>
					<select name="seleccionar_documento">
						<option value="carta_residencia">Carta de residencia</option>
						<option value="carta_alquilado">Carta alquilado</option>
					</select><br><br>
					<input id="botonGris" type="submit" value="Generar documento" id="BotonInput">
					<input id="botonGris" type="button" value="Cancelar" onClick="location.href='../principal_editor.php'" id="BotonInput">
					</form>
				</td>
			</tr>
					
		

		</table>
	</section>
	<footer>
		
	</footer>
</body>
</html>