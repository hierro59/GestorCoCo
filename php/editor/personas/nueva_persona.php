<?php include('../../seguridad.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<script type="text/javascript" src="../../../js/borrar_campos.js"></script>
<title>Nueva persona | CoCo</title>
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
	<section id="">

		<form method="post" action="reg_nueva_persona_bd.php" name="formulario" target="ventanasola" onsubmit="window.open('', 'ventanasola', 'width=400,height=300,top=200,left=300,toolbar=no, location=no, directories=no, status=no, menubar=no ,scrollbars=no, resizable=no')">
			<table>
				<th>Datos personales</th>
				<tr>
					<td>Nombres: <input type="text" name="nombres" required size="30" > </td>				
					<td>Apellidos: <input type="text" name="apellidos" required size="30" > </td>
					<td>Cédula: <input type="text" name="cedula" required/> </td>				
				</tr>
				<tr>
					<td>Estado civil: <select name="estado_civil">
					<option value="Soltero/a">Soltero/a</option>
					<option value="Casado/a">Casado/a</option>
					<option value="Concubino/a">Concubinato</option>
					<option value="Divorciado/a">Divorciado/a</option>
					<option value="Viudo/a">Viudo/a</option>
					</select> 
					</td>
					<td>Fecha de nacimiento: <input type="date" name="fecha_nacimiento" onclick="borracampofecha()" onblur="restauracampofecha()" value="DD/MM/AAAA" > </td>				
					<td>Nacionalidad:	<input type="radio" name="nacionalidad" value="V" checked /> Venezolano 
											<input type="radio" name="nacionalidad" value="E"/> Extranjero 					
					</td>
				</tr>
				<tr>
					<td>Sexo: 	<input type="radio" name="sexo" value="M" checked /> Masculino 
									<input type="radio" name="sexo" value="F"/> Femenino
					</td>
				</tr>
				<th>Dirección:</th>
				<tr>
					<td>Sector:<input type="text" name="sector" required></td>
					<td>Calle / Avenida:<input type="text" name="calle" required></td>
					<td>Número de casa:<input type="text" name="casa_numero" required></td>
				</tr>
				<tr> 
					<td>Comunidad:<input type="text" name="ciudad" required></td>
					<td>Municipio:<input type="text" name="municipio" value="Araure" required></td>
					<td>Estado:<input type="text" name="estado" value="Portuguesa" required></td>
				</tr>
				<th>Contactos:</th>
				<tr>
					<td>Tlf móvil: <input type="text" name="tlf_movil" required onclick="borracampomovil()" onblur="restauracampomovil()" value="Ej. 0416-1234567"> </td>				
					<td>Tlf Habitación: <input type="text" name="tlf_habitacion" onclick="borracampohab()" onblur="restauracampohab()" value="Ej. 0255-1234567"> </td>
					<td>Correo: <input type="mail" name="correo" onclick="borracampocorreo()" onblur="restauracampocorreo()" value="ejemplo@correo.com"> </td>				
				</tr>
				<th>Otros:</th>
				<tr>
					<td>Profesión: <input type="text" name="profesion" > </td>
					<td>Nivel académico: <select name="nivel_academico">
					<option value="sin instrucción">sin instrucción</option>
					<option value="Básica">Básica</option>
					<option value="Bachiller">Bachiller</option>
					<option value="Técnico Medio">Técnico Medio</option>
					<option value="Técnico Superior">Técnico Superior</option>
					<option value="Universitario">Universitario</option>
					<option value="Post Grado">Post Grado</option>
					</select> 
					</td>
					<td>¿Trabaja? 	<input type="radio" name="labora" value="Si" checked> Si
										<input type="radio" name="labora" value="No"> No
					</td>
				</tr>
				<tr>
					<td>¿Tiene hijos? <input type="text" name="hijos" onclick="borracampohijos()" onblur="restauracampohijos()" value="indique cantidad o coloque 0" size="30"> </td>
					<td>Fecha de adquisición de la vivienda: <input type="date" name="fecha_adquisicion_vivienda" onclick="borracampofechavivienda()" onblur="restauracampofechavivienda()" value="DD/MM/AAAA"> </td>
				</tr>
				<tr>					
					<td> 	<input type="submit" value="Registrar"> 
							<input type="reset" value="Limpiar">
							<input type="button" value="Cancelar" onClick="location.href='admin_personas.php'"></td>
				</tr>
				
			</table>
		</form>
	</section>
	<footer>
		
	</footer>
</body>
</html>