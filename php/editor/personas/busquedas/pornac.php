<?php 
include('../../../../php/seguridad.php');
include('../../../../php/bd_conexion.php');
 ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../../img/coquito.png" />

<title>Administrar Vecinos | CoCo</title>
</head>
<body>
<div id="body">
	<header>
		<img src="../../../../img/LogoCabecera.png" alt="Gestor para Consejos Comunales" />
		<div id="icomenu">
		<a href="../../../../index.php" id="IcoLink"><img src="../../../../img/icosalir.png" alt="Salir" /></a>
		</div>
<?php		
if($_SESSION['tipo_usuario']=="1") {
echo	"<div id='icomenu'>
		<a href='../../../root/principal.php'><img src='../../../../img/inicio.png' alt='Salir' /></a>
		</div>";
		}
else {
	echo	"<div id='icomenu'>
		<a href='../../principal_editor.php'><img src='../../../../img/inicio.png' alt='Salir' /></a>
		</div>";
		}
?>
	</header>
	<section>
		<table class="vecino" align="center" >
			<th colspan="6">Organizados por nacionalidad</th>
			<tr>
				<td>Nombres y apellidos</td>
				<td>Cédula</td>
				<td>Dirección</td>
				<td>Teléfono</td>
				<td colspan="2">Acciones</td>
			</tr>
			<?php
mysql_query("SET NAMES 'utf8'");

$nac=$_GET['criterio'];

$rst_personas=mysql_query("SELECT * FROM personas WHERE nacionalidad='$_GET[criterio]'") or die ("Problemas en el select:".mysql_error());
$numero = 0;
while($reg = mysql_fetch_array($rst_personas))
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
	<form	method='GET' action='consultar_persona.php' name='formulario' target='ventanasola' onsubmit='ventana'>
	<input type='hidden' name='cedula' value='$reg[cedula]'>
	<input type='submit' value='detalles' id='botonGrisInforme'>
	</form>" . " " . "</td>";
	echo "<td id='informeTodos'>" . "
	<form	method='GET' action='#'>
	<input type='hidden' name='cedula' value='$reg[cedula]'>
	<input type='submit' value='editar' id='botonGrisInforme'>
	</form>" . " " . "</td></tr>";
    $numero++;
  }
  echo "<tr><td colspan=\"6\"><b>Total de vecinos: " . $numero . 
      "</b></td></tr>";
  mysql_free_result($result);
  mysql_close($link); 
?>
	<tr>
		<td colspan="6">
			<a href="../busqueda_avanzada.php" ><button class="boton2">Volver</button></a> 
			<form action="printpornac.php" method="GET">
				<input type="hidden"  name="nomapeced" value="<?php echo $nac; ?>" />
				<input class="boton2" type="submit" value="Imprimir" />
			</form>
		</td>
	</tr>
		</table>

	</section>
	<footer>
	
	</footer>
</body>
</html>