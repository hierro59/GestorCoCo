<?php
session_start();
if(empty($_SESSION['password'])) // Si no hay una sesión creada, envia al index.
{header('Location: ../../index.php');}
?>