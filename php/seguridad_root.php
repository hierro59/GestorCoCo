<?php
session_start();
if(empty($_SESSION['password'])) // Si no hay una sesión creada, envia al index.
{header('Location: ../../index.php');}
elseif ($_SESSION['tipo_usuario']=='2')
{header('Location: ../../index.php');}
?>
