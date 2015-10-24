<?php include('../../seguridad.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<script type="text/javascript" src="../../../js/borrar_campos.js"></script>
<title>Administrar personas | CoCo</title>
</head>
<body>
<div id="body">
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
		<a href='../principal.php'><img src='../../../img/inicio.png' alt='Salir' /></a>
		</div>";
		}
		
?>
	</header>
	<section>
		<table id="centrar" align="center">
			<tr>
				<td id="boton">
				
					<a href="nueva_persona.php">Registrar nueva persona</a><br>
				</td>
			</tr>
			<tr> 
				<td id="boton">
					<label for="cedula" ><h3>Consultar o editar vecino</h3></label><br><br>
					<form method="post" action="editar_persona.php" name="formulario">
					<input type="text" name="cedula" required="" value="Ingrese número de cédula" id="cedula" onclick="borracampocedula()" onblur="restauracampocedula()">
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