<?php
header("Content-Type: text/html;charset=utf-8");
include('../seguridad_root.php');?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/estilo.css" type="text/css">
<link rel="icon" type="image/png" href="../../img/coquito.png" />
<title>Editar Usuario | CoCo</title>
</head>
<body>
<div id="body">
	<header>
		<a href="../../index.php">Salir</a>
		<a href="principal.php">Inicio</a>
   </header>
<?php 
include('../bd_conexion.php');

$rst_usuarios=mysql_query("SELECT * FROM usuarios where codigo='$_REQUEST[codigo]'") or die ("Problemas en el select:".mysql_error());

if ($reg=mysql_fetch_array($rst_usuarios))
{
?>
	<section>
	<form action="updateusu.php" method="post" target="ventanasola" onsubmit="window.open('', 'ventanasola', 'width=400,height=300,top=200,left=300,toolbar=no, location=no, directories=no, status=no, menubar=no ,scrollbars=no, resizable=no')">
			<table align="center" border="solid">
				<th colspan="2">
					Ingrese los datos del nuevo usuario
				</th>
				<tr>
					<td>
						Código
					</td>
					<td>
						<input type="text" name="codigo" value="<?php echo $reg['codigo'];?>" readonly>
					</td>
				</tr>
				<tr>
					<td>
						Nombres y apellidos
					</td>
					<td>
						<input type="text" name="nombre" value="<?php echo $reg['nombre'];?>" required>
					</td>	
				</tr>
				<tr>
					<td>
						Usuario			
					</td>
					<td>
						<input type="text" name="usuario" value="<?php echo $reg['usuario'];?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Nueva contraseña			
					</td>
					<td>
						<input type="password" name="password" value="<?php echo $reg['password'];?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Repita contraseña			
					</td>
					<td>
						<input type="password" name="password2" value="<?php echo $reg['password'];?>" required>
					</td>
				</tr>
				<tr>
					<td>
						Tipo de usuario			
					</td>
					<td>
						<input type="radio" name="tipo_usuario" value="1">Root
						<input type="radio" name="tipo_usuario" value="2" checked="checked">Editor
							
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="button" value="Cancelar" onClick="location.href='admin_usuario.php'">
						<input type="reset" value="Limpiar">
						<input type="submit" value="Registrar">
					</td>
				</tr>
			</table>
			</form>
<?php
}
else
	{
	header("Location: principal.php");
}
?>
    </section>
    </div>
</body>
</html>
