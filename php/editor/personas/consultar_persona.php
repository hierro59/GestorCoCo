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
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<script type="text/javascript" src="../../../js/borrar_campos.js"></script>
<title><?php echo $reg['nombres']; echo ' '; echo $reg['apellidos']; echo ' '; echo $reg['cedula'];?> | CoCo</title>
<body>
	<header>
		<img src="../../../img/LogoCabecera.png" alt="Gestor para Consejos Comunales" />
	</header>
	<section>


			<table class="vecino" id="centrado">
			
				<th colspan="2">DATOS PERSONALES</th>
				
				<tr>
					<td id="informeCol1">
						Nombres: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['nombres'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Apellidos:
					</td>
					<td id="informeCol2">
						<?php echo $reg['apellidos'];?> <br>
					</td>
				</tr>
				<tr> 
					<td>
						Cédula:
					</td>
					<td id="informeCol2"> 
						<?php echo $reg['nacionalidad'];echo "-";echo $reg['cedula'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Fecha de nacimiento: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['fecha_nacimiento'];?>
					</td>
				</tr>
				<tr>
					<td>
						Sexo:
					</td>
					<td id="informeCol2">
						<?php echo $reg['sexo'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Estado civil: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['estado_civil'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Tlf móvil:
					</td> 
					<td id="informeCol2">
						<?php echo $reg['tlf_movil'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Tlf Habitación: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['tlf_habitacion'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Tlf Trabajo: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['tlf_trabajo'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Correo: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['correo'];?> <br>
					</td>
				</tr>
				
				<th colspan="2">DIRECCIÓN: <br></th>
				
				<tr>
					<td>
						Sector: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['sector'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Calle / Avenida: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['calle'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Número de casa: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['casa_numero'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Comunidad: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['ciudad'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Municipio: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['municipio'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						Estado: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['estado'];?> <br>
					</td>
				</tr>
				
				<th colspan="2">DATOS PROFESIONALES Y ACADÉMICOS: <br></th>
				
				<tr>
					<td>
						Profesión u oficio: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['profesion'];?>
					</td>
				</tr>
				<tr>
					<td>
						¿Trabaja actualmente? 
					</td>
					<td id="informeCol2">
						<?php echo $reg['trabaja'];?>
					</td>
				</tr>
				<tr>
					<td>
						Nivel de instrucción: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['nivel_instruccion'];?>
					</td>
				</tr>
				<tr>
					<td>
						¿Tiene hijos? 
					</td>
					<td id="informeCol2">
						<?php echo $reg['hijos'];?>
					</td>
				</tr>
				<tr>
					<td>
						¿Donde trabaja? 
					</td>
					<td id="informeCol2">
						<?php echo $reg['donde_trabaja'];?>
					</td>
				</tr>
				<tr>
					<td>
						Actividad comercial en la casa: 
					</td>
					<td id="informeCol2">
						<?php echo $reg['que_vende_en_casa'];?> <br>
					</td>
				</tr>
				
				<th colspan="2">SALUD: <br></th>
				
				<tr>
					<td>
						¿Necesita ayuda especial para un enfermo en su casa?
					</td> 
					<td id="informeCol2">
						<?php echo $reg['ayuda_especial'];?> <br>
					</td>
				</tr>
				<tr>
					<td>
						¿Que tipo de ayuda? 
					</td>
					<td id="informeCol2">
						<?php echo $reg['describa_ayuda'];?> <br>
					</td>
				</tr>
								
				<tr>					
					<td colspan="3"> 	
<!--						<input id="botonGris" type="submit" value="Editar"> 
						<input id="botonGris" type="button" value="Volver" onClick="location.href='admin_personas.php'"></td>
-->
						<input id="botonGris" name="button" type="button" onclick="window.close();" value="Cerrar" />
				</tr>
				
			</table>

	</section>
	<footer>
		
	</footer>
</body>
</html>