<?php 
include('../../../../php/seguridad.php');
include('../../../../php/bd_conexion.php');
$respuesta=$_GET['nomapeced'];
 ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../../css/impresion.css" type="text/css">
<link rel="icon" type="image/png" href="../../../../img/coquito.png" />

<title>Consulta avanzada | CoCo</title>
</head>
<body>
	
	<section>
		<table align="center">
			<th colspan="6">Organizados por <?php echo $respuesta; ?></th>
			<tr id="titulo" >
				<td>Nombres y apellidos</td>
				<td>Cédula</td>
				<td>Dirección</td>
				<td>Teléfono</td>
			</tr>
			<?php
mysql_query("SET NAMES 'utf8'");

$rst_personas=mysql_query("SELECT * FROM personas ORDER BY $respuesta") or die ("Problemas en el select:".mysql_error());
$numero = 0;
while($reg = mysql_fetch_array($rst_personas))
  {
    echo "<tr><td id='lista'>" . 
	    $reg['nombres'] . " " . $reg["apellidos"] . "</td>";
    echo "<td id='lista'>" . 
	    $reg["cedula"] . "</td>";
    echo "<td id='lista'>" . 
	    $reg["sector"] . " " . $reg["calle"] . " " . "casa " . $reg["casa_numero"] . "</td>";
	 echo "<td id='lista'>" . 
	    $reg["tlf_movil"] . "</td>";
   
    $numero++;
  }
  echo "<tr id='titulo'><td colspan='6' ><b>Total de vecinos: " . $numero . 
      "</b></td></tr>";
  mysql_free_result($result);
  mysql_close($link); 
?>
		</table>
		<script>
          setTimeout("print();",500);
          setTimeout("window.location='../busqueda_avanzada.php';",10000);
      </script>		
		
	</section>
</body>
</html>