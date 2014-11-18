<?php
header("Content-Type: text/html;charset=utf-8");
include("../bd_conexion.php");
mysql_query("SET NAMES 'utf8'");

$codigo=($_REQUEST['codigo']);

$pass2=$_REQUEST['password2'];

if ($_REQUEST['password']==$pass2)
{
mysql_query("update usuarios set
nombre='$_REQUEST[nombre]',
usuario='$_REQUEST[usuario]',
password='$_REQUEST[password]',
tipo_usuario='$_REQUEST[tipo_usuario]'
where codigo=$codigo")

 or die("Problemas en el select ".mysql_error()." <a href='principal.php'>Volver</a>");
	
header("Location: registro_usuario_exitoso.php");
}
else
{
header("Location: errorpass.php");
}
?>
