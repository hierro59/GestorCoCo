<?php 
include('../../seguridad.php');
include('../../buscar_personas.php');
setlocale(LC_ALL,"es_VE.UTF-8"); //cambia a español para mostrar la fecha con "strftime"
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../../img/coquito.png" />
<title>Carta de residencia | CoCo</title>
</head>
<body>

	<header>
		
	</header>
   
   
	<section>
		<p align="center">
			República Bolivariana de Venezuela<br>
			Ministerio del Poder Popular para las Comunas<br>
			Consejo Comunal ______________________<br>
			RIF G-0000000-G<br>
		</p>
		<br>
		<h1 align="center">Carta de residencia.</h1>
		<br>
		<p align="justify">
			Por medio de la presente se hace constar que <strong><?php echo $reg['nombres'], " ", $reg['apellidos'];?></strong> titular de la cédula de identidad número 
			<strong><?php echo $reg['cedula'];?></strong>, venezolano/a, mayor de edad y en plenas facultades legales, <strong>RESIDE</strong> en la 
			<strong><?php echo $reg['calle']; echo " "; ?></strong> casa número
			<strong><?php echo $reg['casa_numero']; echo " "; echo $reg['sector'];?></strong> de  
			<strong><?php echo $reg['ciudad'];?></strong> del municipio 
			<?php echo $reg['municipio'];?> del estado 
			<?php echo $reg['estado'];?>, desde hace aproximadamente ______ años.
			<br>
			<br>
			Carta que se expide a petición de la parte interesada a los <?php echo date("d");?> días del mes de <?php echo strftime("%B");?> del <?php echo date("Y");?>.
		</p>
		<p align="center">
			<br>
			<br>
			<br>
			Vocero Ejecutivo
			<br>
			<br>
			<br>
			Vocero Administración y Finanzas
			<br>
			<br>
			<br>
			Vocero de Vivienda y Habitad
			<br>
			<br>
			<br>
			Vocero Contraloría Social
		</p>
	</section>
	<section>
	

		<script>
          setTimeout("print();",500);
          setTimeout("window.location='../principal_editor.php';",10000);
         </script>
	
	</section>	
	
	
	<footer>
		
	</footer>
</body>
</html>