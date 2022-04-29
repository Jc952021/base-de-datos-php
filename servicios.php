<?php
header('Access-Control-Allow-Origin: *');

require "includes/funciones.php";
$servicios = obtenerServicios();
 echo json_encode($servicios);

 //habia un problema con la original, si ponias tu url venia por defectoo con otra,etc- borrar ese bundle y vincularlo con el sript de app.js
 //tienes que hacer fetch a tu url pero habia problema de cors - agregar el header aqui y dara-acaba el video
