<?php
header("Content-Type: text/html;charset=utf-8");
include('../../seguridad.php');
include('../../buscar_personas.php');
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<script type="text/javascript" src="../../../js/funciones.js"></script>
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<title>Editar Usuario | CoCo</title>
</head>
<body>
<div id="body">
	<header>
		<a href="../principal_editor.php">Inicio</a>
		<a href="../../../index.php">Salir</a>
    </header>
	<section>
	<form method="post" action="update_persona.php" name="formulario" target="ventanasola" onsubmit="return confirmar();window.open('', 'ventanasola', 'width=400,height=300,top=200,left=300,toolbar=no, location=no, directories=no, status=no, menubar=no ,scrollbars=no, resizable=no')">
			<table>
				<th>Datos personales</th>
				<tr>
					<td>Nombres: <input type="text" name="nombres" value="<?php echo $reg['nombres'];?>" required size="30" > </td>				
					<td>Apellidos: <input type="text" name="apellidos" value="<?php echo $reg['apellidos'];?>" required size="30" > </td>
					<td>Cédula: <input type="text" name="cedula" value="<?php echo $reg['cedula'];?>" required > </td>				
				</tr>
				<tr>
					<td>Estado civil: <select name="estado_civil">
					<option value="<?php echo $reg['estado_civil'];?>"><?php echo $reg['estado_civil'];?></option>
					<option value="Soltero/a">Soltero/a</option>
					<option value="Casado/a">Casado/a</option>
					<option value="Concubino/a">Concubinato</option>
					<option value="Divorciado/a">Divorciado/a</option>
					<option value="Viudo/a">Viudo/a</option>
					</select> 
					</td>
					<td>Fecha de nacimiento: <input type="date" name="fecha_nacimiento" value="<?php echo $reg['fecha_nacimiento'];?>" > </td>				
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
					<td>Sector:<input type="text" name="sector" value="<?php echo $reg['sector'];?>" required></td>
					<td>Calle / Avenida:<input type="text" name="calle" value="<?php echo $reg['calle'];?>" required></td>
					<td>Número de casa:<input type="text" name="casa_numero" value="<?php echo $reg['casa_numero'];?>" required></td>
				</tr>
				<tr> 
					<td>Comunidad:<input type="text" name="ciudad" value="<?php echo $reg['ciudad'];?>" required></td>
					<td>Municipio:<input type="text" name="municipio" value="Araure" required></td>
					<td>Estado:<input type="text" name="estado" value="Portuguesa" required></td>
				</tr>
				<th>Contactos:</th>
				<tr>
					<td>Tlf móvil: <input type="text" name="tlf_movil" required value="<?php echo $reg['tlf_movil'];?>"> </td>				
					<td>Tlf Habitación: <input type="text" name="tlf_habitacion" value="<?php echo $reg['tlf_habitacion'];?>"> </td>
					<td>Correo: <input type="mail" name="correo" value="<?php echo $reg['correo'];?>"> </td>				
				</tr>
				<th>Otros:</th>
				<tr>
					<td>Profesión: <input type="text" name="profesion" value="<?php echo $reg['profesion'];?>"> </td>
					<td>Nivel académico: <select name="nivel_academico">
					<option value="<?php echo $reg['nivel_academico'];?>"><?php echo $reg['nivel_academico'];?></option>
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
					<td>¿Tiene hijos? <input type="text" name="hijos" value="<?php echo $reg['profesion'];?>"> </td>
					<td>Fecha de adquisición de la vivienda: <input type="date" name="fecha_adquisicion_vivienda" value="<?php echo $reg['fecha_adquisicion_vivienda'];?>"> </td>
					<td>Número de registro: <input type="text" name="codigo_persona" value="<?php echo $reg['codigo_persona'];?>" readonly> </td>
				</tr>
				<tr>					
					<td> 	<input type="submit" value="Registrar"> 
							<input type="reset" value="Limpiar">
							<input type="button" value="Cancelar" onClick="location.href='admin_personas.php'"></td>
				</tr>
				
			</table>
		</form>
    </section>
    </div>
</body>
</html>