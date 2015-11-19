<?php include('../../seguridad.php'); ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<script type="text/javascript" src="../../../js/borrar_campos.js"></script>
<title>Nuevo Vecino | CoCo</title>
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
	<section id="">

		<form method="post" action="reg_nueva_persona_bd.php" name="formulario" target="ventanasola" onsubmit="window.open('', 'ventanasola', 'width=400,height=300,top=200,left=300,toolbar=no, location=no, directories=no, status=no, menubar=no ,scrollbars=no, resizable=no')">
			<table class="vecino">
				<th colspan="3">DATOS PERSONALES</th>
				<tr>
					<td>Nombres: <input type="text" name="nombres" required size="33%" > </td>				
					<td>Apellidos: <input type="text" name="apellidos" required size="33%" > </td>
					<td>Fecha de nacimiento: <input type="date" name="fecha_nacimiento" onclick="borracampofecha()" onblur="restauracampofecha()" value="DD/MM/AAAA" > </td>				
				</tr>
				<tr>
					<td>
					Nacionalidad:	
						<select name="nacionalidad">
							<option value="no selecciono"></option>
							<option value="V"> Venezolano</option>
							<option value="E"> Extranjero</option>
						</select> 
					<br>
					Sexo: 	
						<select name="sexo">
							<option value="no selecciono"></option>
							<option value="M"> Masculino</option> 
							<option value="F"> Femenino</option>
						</select>
					Estado civil: 
						<select name="estado_civil">
							<option value="no selecciono"></option>
							<option value="Soltero/a">Soltero/a</option>
							<option value="Casado/a">Casado/a</option>
							<option value="Concubino/a">Concubinato</option>
							<option value="Divorciado/a">Divorciado/a</option>
							<option value="Viudo/a">Viudo/a</option>
						</select> 
					</td>
					<td>
						Cédula: 
							<input type="text" name="cedula" required id="cedula"/> 
					</td>
					<td>	
						Correo: <input type="mail" name="correo" onclick="borracampocorreo()" onblur="restauracampocorreo()" value="ejemplo@correo.com"> 
					</td>				
					
				</tr>
				<tr>
					<td>Tlf móvil: <input type="text" name="tlf_movil" required onclick="borracampomovil()" onblur="restauracampomovil()" value="Ej. 0416-1234567"> </td>				
					<td>Tlf Habitación: <input type="text" name="tlf_habitacion" onclick="borracampohab()" onblur="restauracampohab()" value="Ej. 0255-1234567"> </td>
					<td>Tlf Trabajo: <input type="text" name="tlf_trabajo" onclick="borracampotrabajo()" onblur="restauracampotrabajo()" value="Ej. 0255-1234567"> </td>
				</tr>
				<th colspan="3" >DIRECCIÓN</th>
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
				
			<th colspan="3" >DATOS PROFESIONALES Y ACADÉMICOS</th>
				<tr>				
					<td> Profesión u oficio: <input type="text" name="profesion" value=""></input>
					</td>
					<td>¿Trabaja actualmente? 	<input type="radio" name="trabaja" value="si"> Si
														<input type="radio" name="trabaja" value="no"> No
					</td>
					<td>
						Ingreso mensual: <input type="text" name="ingreso_mensual"/>
					</td>
				</tr>
				<tr>
					<td><strong> Nivel de instrucción: </strong>	<select name="nivel_instruccion">
														<option value="Ninguna">Ninguna</option>
														<option value="Basica">Básica</option>
														<option value="Bachiller">Bachiller</option>
														<option value="Tecnico Medio">Técnico Medio</option>
														<option value="Tecnico Superior">Técnico Superior</option>
														<option value="Universitario">Universitario</option>
														<option value="Postgrado">Postgrado</option>
														<option value="Otro">Otro</option>
														</select>
					</td>
				
					<td><strong> Clasificación de ingresos: </strong>	<select name="clasificacion_ingreso">
														<option value="no selecciono"></option>
														<option value="Diario">Diario</option>
														<option value="Semanal">Semanal</option>
														<option value="Quincenal">Quincenal</option>
														<option value="Mensual">Mensual</option>
														<option value="Trabajo terminado">Trabajo terminado</option>
														</select>
					</td>
						<td>¿Tiene hijos? <input type="text" name="hijos" onclick="borracampohijos()" onblur="restauracampohijos()" value="indique cantidad o coloque 0" size="30"> </td>
				</tr>
				
				<th colspan="3">SITUACIÓN SOCIO ECONÓMICA</th>
				
				<tr>
					<td>
						¿Donde trabaja?
						<select name="donde_trabaja">
							<option value="no selecciono"></option>
							<option value="Institucion publica">Institución publica</option>
							<option value="Empresa privada">Empresa privada</option>
							<option value="Comerciante">Comerciante</option>
							<option value="Economia informal">Economía informa</option>
							<option value="por cuenta propia">Por cuenta propia</option>
						</select>
						<br>
						Otro: <input type="text" value="" name="otro_donde_trabaja"/>
					</td>				
					<td>
						¿Realiza algún tipo de actividad comercial dentro de la vivienda?
						<input type="radio" name="actividad_economica_casa" value="si"> Si
						<input type="radio" name="actividad_economica_casa" value="no"> No				
					</td>
					<td>
						Descríbala: <input type="text" name="que_vende_en_casa"/>
					</td>
				</tr>
				
				<th colspan="3">SALUD</th>
				
					<tr>
						<td>
							Padece usted de: <br>
								<input type="checkbox" name="Cancer" value="si" />Cancer
								<input type="checkbox" name="SIDA" value="si" />SIDA
								<input type="checkbox" name="Hepatitis" value="si" />Hepatitis
								<input type="checkbox" name="Epilepsia" value="si" />Epilepsia <br>
								<input type="checkbox" name="Diabetes" value="si" />Diabetes
								<input type="checkbox" name="Corazon" value="si" />Corazón
								<input type="checkbox" name="Leucemia" value="si" />Leucemia <br>
								<input type="checkbox" name="Tuberculosis" value="si" />Tuberculosis
								<input type="checkbox" name="Hipertension" value="si" />Hipertensión
								<input type="checkbox" name="Asma" value="si" />Asma
								<br>
							Otro: <input type="text" name="otra_enfermedad"/>
						</td>
						<td>
							¿Necesita ayuda especial para su enfermedad? <br>
							<input type="radio" name="ayuda_especial" value="si"> Si
							<input type="radio" name="ayuda_especial" value="no"> No				
						</td>
						<td>
							Descríbala: <input type="text" name="describa_ayuda"/>
						</td>
						</td>
					
					</tr>
					
					<th colspan="3">PARTICIPACIÓN CIUDADANA</th>
					
					<tr>
						<td>
							¿Existen organizaciones comunitarias?<br>
							<input type="radio" name="org_comu" value="si"> Si
							<input type="radio" name="org_comu" value="no"> No
							<br>
							¿Cuales? <input type="text" name="las_org_comu"/>
						</td>
						<td>
							¿Participa usted en alguna de ellas?<br>
							<input type="radio" name="participa_org_comu" value="si"> Si
							<input type="radio" name="participa_org_comu" value="no"> No
						</td>
						<td>
							¿Cuales misiones se están implementando en la comunidad?<br>
							<input type="checkbox" name="robinson" value="si"/>Robinsón 
							<input type="checkbox" name="ribas" value="si"/>Ribas 
							<input type="checkbox" name="sucre" value="si"/>Sucre
							<input type="checkbox" name="mercal" value="si"/>Mercal <br>
							<input type="checkbox" name="barrio_adentro" value="si"/>Barrio Adentro 
							<input type="checkbox" name="identidad" value="si"/>Identidad 
							<input type="checkbox" name="nevado" value="si"/>Nevado 
							<input type="checkbox" name="vivienda" value="si"/>Vivienda <br>
							Otra: <input type="text" name="otra_mision"/>
						</td>
					</tr>
					<th colspan="3">ENCUESTA</th>
					<tr>
						<td colspan="3">
						¿Cree Ud. Que en la actualidad el pueblo esta interviniendo 
						en las decisiones sobre como deben gastarse los recursos de su comunidad?
						<br>
						<input type="radio" name="encuesta01" value="si"> Si
						<input type="radio" name="encuesta01" value="no"> No
						</td>
					</tr>
					<tr>
					<td colspan="3">
						¿Está de acuerdo, que según la constitución, es ahora el Pueblo organizado quien debe tener 
						el protagonismo y el Poder para decidir sobre como invertir el presupuesto en su comunidad?
						<br>
						<input type="radio" name="encuesta02" value="si"> Si
						<input type="radio" name="encuesta02" value="no"> No
					</td>
					</tr>
					<tr>
						<td colspan="3">
							¿Estaría dispuesto(a) a apoyar y participar en la creación de un Consejo Comunal en su comunidad?
							<br>
							<input type="radio" name="encuesta03" value="si"> Si
							<input type="radio" name="encuesta03" value="no"> No
						</td>
					</tr>
				
				
				
				<tr>					
					<td colspan="3"> 	
						<input id="botonGris" type="submit" value="Registrar"> 
						<input id="botonGris" type="reset" value="Limpiar">
						<input id="botonGris" type="button" value="Cancelar" onClick="location.href='admin_personas.php'">
						</td>
				</tr>
				
			</table>
		</form>
	</section>
	<footer>
		
	</footer>
</body>
</html>