<?php
include('../../seguridad.php');
include('../../buscar_personas.php');

if ($reg['cedula'] == $_GET['cedula']) {
	echo '';
} else {
	header("Location: admin_personas.php");
}


?>
<!DOCTYPE HTML>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
	<link rel="icon" type="image/png" href="../../../img/coquito.png" />
	<script type="text/javascript" src="../../../js/borrar_campos.js"></script>
	<title><?php echo $reg['nombres'];
			echo ' ';
			echo $reg['apellidos'];
			echo ' ';
			echo $reg['cedula']; ?> | CoCo</title>

<body>
	<header>
		<img src="../../../img/LogoCabecera.png" alt="Gestor para Consejos Comunales" />
		<div id="icomenu">
			<a href="../../../index.php" id="IcoLink"><img src="../../../img/icosalir.png" alt="Salir" /></a>
		</div>
		<?php

		if ($_SESSION['tipo_usuario'] == "1") {

			echo	"<div id='icomenu'>
		<a href='../../root/principal.php'><img src='../../../img/inicio.png' alt='Salir' /></a>
		</div>";
		} else {
			echo	"<div id='icomenu'>
		<a href='../principal_editor.php'><img src='../../../img/inicio.png' alt='Salir' /></a>
		</div>";
		}

		?>
	</header>
	<section>


		<table class="vecino" align="center">

			<th colspan="2">DATOS PERSONALES</th>

			<tr>
				<td>
					Nombres:
				</td>
				<td id="informeCol2">
					<?php echo $reg['nombres']; ?> <br>
				</td>
			</tr>
			<tr>
				<td>
					Apellidos:
				</td>
				<td id="informeCol2">
					<?php echo $reg['apellidos']; ?> <br>
				</td>
			</tr>
			<tr>
				<td>
					Cédula:
				</td>
				<td id="informeCol2">
					<?php echo $reg['nacionalidad'];
					echo "-";
					echo $reg['cedula']; ?> <br>
				</td>
			</tr>
			<tr>
				<td>
					Fecha de nacimiento:
				</td>
				<td id="informeCol2">
					<?php echo $reg['fecha_nacimiento']; ?>
				</td>
			</tr>

			<tr>
				<td>
					Estado civil:
				</td>
				<td id="informeCol2">
					<?php echo $reg['estado_civil']; ?> <br>
				</td>
			</tr>
			<tr>
				<td>
					Tlf móvil:
				</td>
				<td id="informeCol2">
					<?php echo $reg['tlf_movil']; ?> <br>
				</td>
			</tr>
			<tr>
				<td>
					Tlf Habitación:
				</td>
				<td id="informeCol2">
					<?php echo $reg['tlf_habitacion']; ?> <br>
				</td>
			</tr>

			<tr>
				<td>
					Correo:
				</td>
				<td id="informeCol2">
					<?php echo $reg['correo']; ?> <br>
				</td>
			</tr>

			<th colspan="2">DIRECCIÓN: <br></th>

			<tr>
				<td>
					Sector:
				</td>
				<td id="informeCol2">
					<?php echo $reg['sector']; ?> <br>
				</td>
			</tr>
			<tr>
				<td>
					Calle / Avenida:
				</td>
				<td id="informeCol2">
					<?php echo $reg['calle']; ?> <br>
				</td>
			</tr>
			<tr>
				<td>
					Número de casa:
				</td>
				<td id="informeCol2">
					<?php echo $reg['casa_numero']; ?> <br>
				</td>
			</tr>
			<tr>
				<td>
					Comunidad:
				</td>
				<td id="informeCol2">
					<?php echo $reg['ciudad']; ?> <br>
				</td>
			</tr>


			<th colspan="2">DATOS PROFESIONALES Y ACADÉMICOS: <br></th>

			<tr>
				<td>
					Profesión u oficio:
				</td>
				<td id="informeCol2">
					<?php echo $reg['profesion']; ?>
				</td>
			</tr>

			<tr>
				<td>
					Nivel de instrucción:
				</td>
				<td id="informeCol2">
					<?php echo $reg['nivel_instruccion']; ?>
				</td>
			</tr>
			<tr>
				<td>
					¿Tiene hijos?
				</td>
				<td id="informeCol2">
					<?php echo $reg['hijos']; ?>
				</td>
			</tr>
			<tr>
				<td>
					¿Donde trabaja?
				</td>
				<td id="informeCol2">
					<?php echo $reg['donde_trabaja']; ?>
				</td>
			</tr>




			<tr>
				<td colspan="3">

					<form method="get" action="editar_persona.php" name="formulario">

						<input type="hidden" name="cedula" value="<?php echo $reg['cedula']; ?>">
						<a href="<?php echo $_GET['anterior']; ?>"><span id="botonGris">Volver</span></a>
						<input id="botonGris" type="submit" value="editar">

					</form>

			</tr>

		</table>

	</section>
	<footer>

	</footer>
</body>

</html>