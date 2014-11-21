<?php
session_start(); //Inicia la sesión del operador.
$_SESSION['usuario']=$_REQUEST['usuario']; //Establece los datos del usuario de la sesión.
$_SESSION['password']=$_REQUEST['password']; //Establece los datos de la contraseña de la sesión.

include('bd_conexion.php');

$rst_usuarios=mysql_query("SELECT tipo_usuario, password FROM usuarios where usuario='$_REQUEST[usuario]'") or die ("Problemas en el select:".mysql_error());

$reg=mysql_fetch_array($rst_usuarios);

$pass=$_REQUEST['password'];

$pass_rec=$reg['password'];

if ($pass_rec==$pass && $reg['tipo_usuario']=='1')
		{
			header("Location: ../php/root/principal.php");
		}
elseif ($pass_rec==$pass && $reg['tipo_usuario']=='2')
		{
			header("Location: ../php/editor/principal_editor.php");
		}
 
else {header("Location: ../index.php");} //Si los datos son incorrectos, nos muestra un error.

$_SESSION['tipo_usuario']=$reg['tipo_usuario']; //Establece los datos de los privilegios del usuario.

?>