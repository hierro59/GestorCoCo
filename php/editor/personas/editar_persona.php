<?php 
include('../../seguridad.php'); 
include('../../buscar_personas.php');
if($reg['cedula']==$_GET['cedula']) {
	echo '';
}
else {
	header("Location: no_registrado.php");
}
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<script type="text/javascript" src="../../../js/funciones.js"></script>
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<title>Editar Vecino | CoCo</title>
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

		<form method="post" action="update_persona.php" name="formulario">
			<table class="vecino">
				<th colspan="2">DATOS PERSONALES</th>
				<tr>
					<td>Nombres: <input type="text" name="nombres" required size="33%" value="<?php echo $reg['nombres'];?>"> </td>
					<td>Apellidos: <input type="text" name="apellidos" required size="33%" value="<?php echo $reg['apellidos'];?>"> </td>
				</tr>
				<tr>
					<td>Fecha de nacimiento: <input type="date" name="fecha_nacimiento" value="<?php echo $reg['fecha_nacimiento'];?>"> </td>
					<td>
						Cédula: 
							<input type="text" name="cedula" required id="cedula" value="<?php echo $reg['cedula'];?>"/> 
					</td>			
				</tr>
				<tr>
					<td colspan="2">
					Nacionalidad:	
						<select name="nacionalidad">
							<option value="<?php echo $reg['nacionalidad'];?>"><?php echo $reg['nacionalidad'];?></option>
							<option value="Venezolano"> Venezolano</option>
							<option value="Extranjero"> Extranjero</option>
						</select>
					CNE:	
						<select name="cne">
							<option value="<?php echo $reg['cne'];?>"><?php echo $reg['cne'];?></option>
							<option value="si"> Si</option>
							<option value="no"> No</option>
						</select> 
					Sexo: 	
						<select name="sexo">
							<option value="<?php echo $reg['sexo'];?>"><?php echo $reg['sexo'];?></option>
							<option value="Masculino"> Masculino</option> 
							<option value="Femenino"> Femenino</option>
						</select>
					Estado civil: 
						<select name="estado_civil">
							<option value="<?php echo $reg['estado_civil'];?>"><?php echo $reg['estado_civil'];?></option>
							<option value="Soltero/a">Soltero/a</option>
							<option value="Casado/a">Casado/a</option>
							<option value="Concubino/a">Concubinato</option>
							<option value="Divorciado/a">Divorciado/a</option>
							<option value="Viudo/a">Viudo/a</option>
						</select> 
					</td>
				</tr>
				<tr>
					<td>¿Discapacitado? 	<input type="radio" name="discapacidad" value="si" <?php if($reg['discapacidad']=='si') { echo 'checked="checked"'; }?> /> Si
												<input type="radio" name="discapacidad" value="no" <?php if($reg['discapacidad']=='no') { echo 'checked="checked"'; }?> /> No
					</td>
					<td > 
						Describa discapacidad <br>
						<input type="text"	name="describe_discapacidad" value="<?php echo $reg['describe_discapacidad'];?>" />
					</td>
					
				</tr>
				<tr>
					<td>Tlf móvil: <input type="text" name="tlf_movil" required onclick="borracampomovil()" onblur="restauracampomovil()" value="<?php echo $reg['tlf_movil'];?>" /> </td>				
					<td>Tlf Habitación: <input type="text" name="tlf_habitacion" onclick="borracampohab()" onblur="restauracampohab()" value="<?php echo $reg['tlf_habitacion'];?>" /> </td>
				</tr>
				<tr>
					<td>Tlf Trabajo: <input type="text" name="tlf_trabajo" onclick="borracampotrabajo()" onblur="restauracampotrabajo()" value="<?php echo $reg['tlf_trabajo'];?>" /> </td>
					<td>	
						Correo: <input type="mail" name="correo" onclick="borracampocorreo()" onblur="restauracampocorreo()" value="<?php echo $reg['correo'];?>"> 
					</td>
				</tr>
				<th colspan="2" >DIRECCIÓN</th>
				<tr>
					<td>Sector:<input type="text" name="sector" value="<?php echo $reg['sector'];?>"></td>
					<td>Calle / Avenida:<input type="text" name="calle" required value="<?php echo $reg['calle'];?>"></td>
				</tr>
				<tr>
					<td>Número de casa:<input type="text" name="casa_numero" required value="<?php echo $reg['casa_numero'];?>" ></td>
					<td>Comunidad:<input type="text" name="ciudad" required value="<?php echo $reg['ciudad'];?>"></td>
				</tr>
				<tr>
					<td>Municipio:<input type="text" name="municipio" value="<?php echo $reg['municipio'];?>" required></td>
					<td>Estado:<input type="text" name="estado" value="<?php echo $reg['estado'];?>" required></td>
				</tr>
				
			<th colspan="2" >DATOS PROFESIONALES Y ACADÉMICOS</th>
				<tr>				
					<td> Profesión u oficio: <input type="text" name="profesion" value="<?php echo $reg['profesion'];?>" /></td>
					<td>	¿Trabaja actualmente? 	<input type="radio" name="trabaja" value="si" <?php if($reg['trabaja']=='si') { echo 'checked="checked"'; }?> /> Si
															<input type="radio" name="trabaja" value="no" <?php if($reg['trabaja']=='no') { echo 'checked="checked"'; }?> /> No <br>
							¿Está pensionado? 		<input type="radio" name="pensionado" value="si" <?php if($reg['pensionado']=='si') { echo 'checked="checked"'; }?> /> Si
															<input type="radio" name="pensionado" value="no" <?php if($reg['pensionado']=='no') { echo 'checked="checked"'; }?> /> No
					</td>
				</tr>
				<tr>
					<td>
						Ingreso mensual: <input type="text" name="ingreso_mensual" value="<?php echo $reg['ingreso_mensual'];?>"/>
					</td>
					<td> Nivel de instrucción:	<select name="nivel_instruccion">
														<option value="<?php echo $reg['nivel_instruccion'];?>"><?php echo $reg['nivel_instruccion'];?></option>
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
				<tr>
					<td>Clasificación de ingresos: <select name="clasificacion_ingreso">
														<option value="<?php echo $reg['clasificacion_ingreso'];?>"><?php echo $reg['clasificacion_ingreso'];?></option>
														<option value="Diario">Diario</option>
														<option value="Semanal">Semanal</option>
														<option value="Quincenal">Quincenal</option>
														<option value="Mensual">Mensual</option>
														<option value="Trabajo terminado">Trabajo terminado</option>
														</select>
					</td>
						<td>¿Tiene hijos? <input type="text" name="hijos" onclick="borracampohijos()" onblur="restauracampohijos()" value="<?php echo $reg['hijos'];?>" size="30"> </td>
				</tr>
				<tr>
					<td colspan="2">
						Describa y separe con comas, si posee una o más habilidades empíricas: <br><input type="text" size="80%" name="habilidades" value="<?php echo $reg['habilidades'];?>" />
					</td> 
				</tr>
				
				<th colspan="2">SITUACIÓN SOCIO ECONÓMICA</th>
				
				<tr>
					<td>
						¿Donde trabaja?
						<select name="donde_trabaja">
							<option value="<?php echo $reg['donde_trabaja'];?>"><?php echo $reg['donde_trabaja'];?></option>
							<option value="Institucion publica">Institución publica</option>
							<option value="Empresa privada">Empresa privada</option>
							<option value="Comerciante">Comerciante</option>
							<option value="Economia informal">Economía informa</option>
							<option value="por cuenta propia">Por cuenta propia</option>
						</select>
						<br>
						Otro: <input type="text" name="otro_donde_trabaja" value="<?php echo $reg['otro_donde_trabaja'];?>"/>
					</td>				
					<td>
						¿Realiza algún tipo de actividad comercial dentro de la vivienda?
						<input type="radio" name="actividad_economica_casa" value="si" <?php if($reg['actividad_economica_casa']=='si') { echo 'checked="checked"'; }?> /> Si
						<input type="radio" name="actividad_economica_casa" value="no" <?php if($reg['actividad_economica_casa']=='no') { echo 'checked="checked"'; }?> /> No				
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Describa la actividad comercial: <br> <input type="text" size="80%" name="que_vende_en_casa" value="<?php echo $reg['que_vende_en_casa'];?>" />
					</td>
				</tr>
				
				<th colspan="2">SALUD</th>
				
					<tr>
						<td>
							Padece usted de: <br>
								<input type="checkbox" name="Cancer" value="si" <?php if($reg['Cancer']=='si'){echo 'checked';}?>/>Cancer
								<input type="checkbox" name="SIDA" value="si" <?php if($reg['SIDA']=='si'){echo 'checked';}?>/>SIDA
								<input type="checkbox" name="Hepatitis" value="si" <?php if($reg['Hepatitis']=='si'){echo 'checked';}?> />Hepatitis
								<input type="checkbox" name="Epilepsia" value="si" <?php if($reg['Epilepsia']=='si'){echo 'checked';}?> />Epilepsia <br>
								<input type="checkbox" name="Diabetes" value="si" <?php if($reg['Diabetes']=='si'){echo 'checked';}?> />Diabetes
								<input type="checkbox" name="Corazon" value="si" <?php if($reg['Corazon']=='si'){echo 'checked';}?> />Corazón
								<input type="checkbox" name="Leucemia" value="si" <?php if($reg['Leucemia']=='si'){echo 'checked';}?> />Leucemia <br>
								<input type="checkbox" name="Tuberculosis" value="si" <?php if($reg['Tuberculosis']=='si'){echo 'checked';}?> />Tuberculosis
								<input type="checkbox" name="Hipertension" value="si" <?php if($reg['Hipertension']=='si'){echo 'checked';}?> />Hipertensión
								<input type="checkbox" name="Asma" value="si" <?php if($reg['Asma']=='si'){echo 'checked';}?> />Asma
								<br>
							Otro: <input type="text" name="otra_enfermedad" value="<?php echo $reg['otra_enfermedad'];?>"/>
						</td>
						<td>
							¿Necesita ayuda especial para su enfermedad? <br>
							<input type="radio" name="ayuda_especial" value="si" <?php if($reg['ayuda_especial']=='si') { echo 'checked="checked"'; }?> /> Si
							<input type="radio" name="ayuda_especial" value="no" <?php if($reg['ayuda_especial']=='no') { echo 'checked="checked"'; }?> /> No				
						</td>
					</tr>
					<tr>
						<td colspan="2">
							Describa que tipo de ayuda necesita: <input type="text" size="80%" name="describa_ayuda" value="<?php echo $reg['describa_ayuda'];?>"/>
						</td>
					</tr>
					
					
					<th colspan="2">PARTICIPACIÓN CIUDADANA</th>
					
					<tr>
						<td>
							¿Existen organizaciones comunitarias?<br>
							<input type="radio" name="org_comu" value="si" <?php if($reg['org_comu']=='si') { echo 'checked="checked"'; }?> /> Si
							<input type="radio" name="org_comu" value="no" <?php if($reg['org_comu']=='no') { echo 'checked="checked"'; }?> /> No
						</td>
						<td>
							¿Cuales? <input type="text" size="40%" name="las_org_comu" value="<?php echo $reg['las_org_comu'];?>"/>
						</td>
					</tr>
					<tr>
						<td>
							¿Participa usted en alguna de ellas?<br>
							<input type="radio" name="participa_org_comu" value="si" <?php if($reg['participa_org_comu']=='si') { echo 'checked="checked"'; }?> /> Si
							<input type="radio" name="participa_org_comu" value="no" <?php if($reg['participa_org_comu']=='no') { echo 'checked="checked"'; }?> /> No
						</td>
					
						<td>
							¿Cuales misiones se están implementando en la comunidad?<br>
							<input type="checkbox" name="robinson" value="si" <?php if($reg['robinson']=='si'){echo 'checked';}?>/>Robinsón 
							<input type="checkbox" name="ribas" value="si" <?php if($reg['ribas']=='si'){echo 'checked';}?>/>Ribas 
							<input type="checkbox" name="sucre" value="si" <?php if($reg['sucre']=='si'){echo 'checked';}?>/>Sucre
							<input type="checkbox" name="mercal" value="si" <?php if($reg['mercal']=='si'){echo 'checked';}?>/>Mercal <br>
							<input type="checkbox" name="barrio_adentro" value="si" <?php if($reg['barrio_adentro']=='si'){echo 'checked';}?>/>Barrio Adentro 
							<input type="checkbox" name="identidad" value="si" <?php if($reg['identidad']=='si'){echo 'checked';}?>/>Identidad 
							<input type="checkbox" name="nevado" value="si" <?php if($reg['nevado']=='si'){echo 'checked';}?>/>Nevado 
							<input type="checkbox" name="vivienda" value="si" <?php if($reg['vivienda']=='si'){echo 'checked';}?>/>Vivienda <br>
							Otra: <input type="text" name="otra_mision" value="<?php echo $reg['otra_mision'];?>"/>
						</td>
					</tr>
					
					<th colspan="2">ENCUESTA</th>
					<tr>
						<td colspan="2">
						¿Cree Ud. Que en la actualidad el pueblo esta interviniendo 
						en las decisiones sobre como deben gastarse los recursos de su comunidad?
						<br>
						<input type="radio" name="encuesta01" value="si" <?php if($reg['encuesta01']=='si') { echo 'checked="checked"'; }?> /> Si
						<input type="radio" name="encuesta01" value="no" <?php if($reg['encuesta01']=='no') { echo 'checked="checked"'; }?> /> No
						</td>
					</tr>
					<tr>
					<td colspan="2">
						¿Está de acuerdo, que según la constitución, es ahora el Pueblo organizado quien debe tener 
						el protagonismo y el Poder para decidir sobre como invertir el presupuesto en su comunidad?
						<br>
						<input type="radio" name="encuesta02" value="si" <?php if($reg['encuesta02']=='si') { echo 'checked="checked"'; }?> /> Si
						<input type="radio" name="encuesta02" value="no" <?php if($reg['encuesta02']=='no') { echo 'checked="checked"'; }?> /> No
					</td>
					</tr>
					<tr>
						<td colspan="2">
							¿Estaría dispuesto(a) a apoyar y participar en la creación de un Consejo Comunal en su comunidad?
							<br>
							<input type="radio" name="encuesta03" value="si" <?php if($reg['encuesta03']=='si') { echo 'checked="checked"'; }?> /> Si
							<input type="radio" name="encuesta03" value="no" <?php if($reg['encuesta03']=='no') { echo 'checked="checked"'; }?> /> No
						</td>
					</tr>
				<tr>
					<td colspan="2"> 	
						<input id="botonGris" type="button" value="Cancelar" onClick="location.href='admin_personas.php'">
						<input id="botonGris" type="reset" value="Limpiar">
						<input id="botonGris" type="submit" value="Registrar" onclick="return confirmar();">
						</td>
				</tr>
			</table>
		</form>
	</section>
</body>
</html>