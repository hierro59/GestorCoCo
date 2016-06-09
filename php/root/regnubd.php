<?php
include('../seguridad_root.php');
include('../bd_conexion.php');

$pass2=$_REQUEST['password2'];

$ingresar="INSERT INTO usuarios
(nombre,
usuario,
password,
tipo_usuario)
VALUES
('$_REQUEST[nombre]',
'$_REQUEST[usuario]',
'$_REQUEST[password]',
'$_REQUEST[tipo_usuario]')";

if ($_REQUEST['password']==$pass2)

	{
mysqli_query($conexion,$ingresar) or die ("Problemas en el INSERT ".mysqli_error()." <a href='nuevoregistro.php'>Volver</a>");
	
header("Location: admin_usuario.php");
	}
else
{
header("Location: nuevo_usuario.php?error");
}
?>
