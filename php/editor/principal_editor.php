<?php include('../seguridad.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../img/coquito.png" />
<title>Editor | CoCo</title>
</head>
<body>
	<header>
		<img src="../../img/LogoCabecera.png" alt="Gestor para Consejos Comunales" />
		<div id="icomenu">
		<a href="../../index.php"><img src="../../img/icosalir.png" alt="Salir" /></a>
		</div>
<?php		
		
if($_SESSION['tipo_usuario']=="1") {
	
echo	"<div id='icomenu'>
		<a href='../root/principal.php'><img src='../../img/inicio.png' alt='Salir' /></a>
		</div>";
		}
?>
	</header>
	<section id="">
		<table id="centrar" align="center">
			<tr>
				<td id="boton"><a href="personas/admin_personas.php" id="BotonLink">Personas</a></td>
			
				<td id="boton"><a href="cartas/emitir_cartas.php" id="BotonLink">Emitir Cartas</a></td>
			</tr>
		
		</table>
	</section>
	<footer>
		
	</footer>
</body>
</html>