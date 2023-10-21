<?php

include('bd_conexion.php');

$rst_mi_coco = mysqli_query($conexion, "SELECT * FROM consejo_comunal");

$reg_mi_coco = mysqli_fetch_array($rst_mi_coco);
