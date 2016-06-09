<?php
header("Content-Type: text/html;charset=utf-8");
include("../bd_conexion.php");
mysqli_query("SET NAMES 'utf8'");

$codigo=($_REQUEST['codigo']);

if ($_REQUEST['codigo']==$codigo)
{
mysqli_query($conexion,"DELETE FROM usuarios 
WHERE
codigo='$codigo'")

 or die("Problemas en el select ".mysqli_error()."<a href='principal.php'>Volver</a>");
	
header("Location: admin_usuario.php");
}
else
{
echo "OMG!";
}

?>