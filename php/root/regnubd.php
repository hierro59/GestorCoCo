<?php
include('../seguridad_root.php');
include('../bd_conexion.php');

$pass2=$_REQUEST['password2'];

if ($_REQUEST['password']==$pass2)

	{
mysql_query("insert into usuarios
(nombre,
usuario,
password,
tipo_usuario) 
value('$_REQUEST[nombre]',
'$_REQUEST[usuario]',
'$_REQUEST[password]',
'$_REQUEST[tipo_usuario]')") or die("Problemas en el select ".mysql_error()." <a href='nuevoregistro.php'>Volver</a>");
	mysql_close($conexion);
header("Location: registro_usuario_exitoso.php");
	}
else
{
header("Location: errorpass.php");
}
?>
