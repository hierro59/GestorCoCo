<?php include('../../seguridad.php');
include('../../../php/bd_conexion.php'); ?>
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
		<table class="vecino" align="center" >
			<th colspan="6">Todos los vecinos registrados</th>
			<tr>
				<td>Nombres y apellidos</td>
				<td>Cédula</td>
				<td>Dirección</td>
				<td>Teléfono</td>
				<td colspan="2">Acciones</td>
			</tr>
			<?php
mysqli_query("SET NAMES 'utf8'");
$rst_personas=mysqli_query($conexion,"SELECT * FROM personas") or die ("Problemas en el select:".mysqli_error());
$numero = 0;
while($reg = mysqli_fetch_array($rst_personas))
  {
    echo "<tr><td id='informeTodos'>" . 
	    $reg['nombres'] . " " . $reg["apellidos"] . "</td>";
    echo "<td id='informeTodos'>" . 
	    $reg["cedula"] . "</td>";
    echo "<td id='informeTodos'>" . 
	    $reg["sector"] . " " . $reg["calle"] . " " . "casa " . $reg["casa_numero"] . "</td>";
	 echo "<td id='informeTodos'>" . 
	    $reg["tlf_movil"] . "</td>";
    echo "<td id='informeTodos'>" . "
	<form	method='GET' action='consultar_persona.php' name='formulario'>
	<input type='hidden' name='cedula' value='$reg[cedula]'>
	<input type='hidden' name='anterior' value='consultarlos_todos.php'>
	<input type='submit' value='detalles' id='botonGrisInforme'>
	</form>" . " " . "</td>";
	echo "<td id='informeTodos'>" . "
	<form	method='GET' action='editar_persona.php'>
	<input type='hidden' name='cedula' value='$reg[cedula]'>

	<input type='submit' value='editar' id='botonGrisInforme'>
	</form>" . " " . "</td></tr>";
    $numero++;
  }
  echo "<tr><td colspan=\"6\"><b>Total de vecinos: " . $numero . 
      "</b></td></tr>";
  
  mysqli_free_result($result);

?>
<tr>
		<td colspan="6">
			<a href="admin_personas.php" ><button class="boton2">Volver</button></a> 
			<a href="#" ><button class="boton2">Imprimir</button></a>
		</td>
	</tr>
		</table>
		
				
		
		
	</section>
	<footer>
	
	</footer>
</body>
</html>