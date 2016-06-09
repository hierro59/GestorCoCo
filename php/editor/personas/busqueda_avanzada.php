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
			<th colspan="4">Búsqueda Avanzada</th>
			
			<tr>
			<form method="GET" action="busquedas/pornomapeced.php">
				<td id="seleccion">
					Ordenar todos por: 
					<select name="criterio" >
						<option value="nombres" >Nombres</option>
						<option value="apellidos" >Apellidos</option>
						<option value="cedula" >Cédulas</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			<form method="GET" action="busquedas/poredades.php">
				<td id="seleccion">
					Ordenar por edades: <br>
					<select name="criterio" >
						<option value="niños" >Niños y niñas (hasta los 14 años)</option>
						<option value="juvenes" >Jóvenes (hasta los 17 años)</option>
						<option value="adultos_varones" >Adultos Varones (hasta los 59 años)</option>
						<option value="adultos_hembras" >Adultos Hembras (hasta los 54 años)</option>
						<option value="adultos_mayores" >Adultos Mayores (ambos sexos)</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			</tr>
			<tr>
			<form method="GET" action="busquedas/pornac.php">
				<td id="seleccion">
					Ordenar nacionalidad: 
					<select name="criterio">
						<option value="V" >Venezolano</option>
						<option value="E" >Extranjero</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar sexo: 
					<select name="todos" >
						<option value="femenino" >Femenino</option>
						<option value="masculino" >Masculino</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			</tr>
			<tr>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar estado civil: 
					<select name="todos" >
						<option value="solteros" >Soltero/a</option>
						<option value="casados" >Casado/a</option>
						<option value="concubinato" >Concubinato</option>
						<option value="divorciado" >Divorciado/a</option>
						<option value="viudo" >Viudo/a</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por sector donde vive:
					<input type="hidden" value="sector" name="sector">
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			</tr>
			<tr>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por calle o avenida: <br>
					<input type="text" name="calle_avenida">
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por número de casa: <br>
					<input type="hidden" value="casa" name="casa">
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			</tr>
			<tr>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por profesión u oficio: <br>
					<input type="hidden" value="profesion" name="profesion">
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por si trabaja o esta desempleado: <br>
					<select name="trabajo" >
						<option value="trabajando" >Trabaja</option>
						<option value="desempleado" >Desempleado</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			</tr>
			<tr>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por Nivel de Instrucción: <br>
					<select name="estudios" >
						<option value="ninguna" >Ninguna</option>
						<option value="basica" >Básica</option>
						<option value="bachiller" >Bachiller</option>
						<option value="tecnico_medio" >Técnico Medio</option>
						<option value="tsu" >Técnico Superior</option>
						<option value="universitario" >Universitario</option>
						<option value="postgrado" >Postgrado</option>
						<option value="otro" >Otro</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por clasificación de ingresos: <br>
					<select name="tipo_ingresos" >
						<option value="diario" >Diario</option>
						<option value="semanal" >Semanal</option>
						<option value="quincenal" >Quincenal</option>
						<option value="mensual" >Mensual</option>
						<option value="terminado" >Trabajo terminado</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			</tr>
			<tr>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por cantidad de hijos:<br>
					<input type="hidden" value="hijos" name="hijos">
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por tipo de trabajo: <br>
					<select name="tipo_trabajo" >
						<option value="publica" >Institución pública</option>
						<option value="privada" >Empresa Privada</option>
						<option value="comerciante" >Comerciante</option>
						<option value="informal" >Economía Informal</option>
						<option value="propia" >Por cuenta propia</option>
						<option value="otro" >Otro</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			</tr>
			<tr>
			<form method="GET" action="#">
				<td id="seleccion">
					¿Actividad económica en la vivienda?:<br>
					<input type="radio" name="negocio_casa" value="si"> Si
					<input type="radio" name="negocio_casa" value="no"> No
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			<form method="GET" action="#">
				<td id="seleccion">
					Ordenar por enfermedad: <br>
					<select name="enfermedad" >
						<option value="cancer" >Cáncer</option>
						<option value="sida" >SIDA</option>
						<option value="hepatitis" >Hepatitis</option>
						<option value="diabetes" >Diabetes</option>
						<option value="corazon" >Corazón</option>
						<option value="leucemia" >Leucemia</option>
						<option value="tuberculosis" >Tuberculosis</option>
						<option value="hipertension" >Hipertensión</option>
						<option value="asma" >Asma</option>
						<option value="otra" >Otra</option>
					</select>
				</td>
				<td id="seleccion">
					<input class="boton2" type="submit" value="consultar">
				</td>
			</form>
			</tr>
			
		</table>
	</section>
	<footer>
	
	</footer>
</body>
</html>