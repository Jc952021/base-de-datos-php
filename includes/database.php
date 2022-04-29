<?php

//el 1 param es tu host es decir donde esta tu proyecto,2 el usuario,3 la contra y 4 la base de datos a la que quieres conectarte
$db = mysqli_connect("localhost","root","root","appsalon");
mysqli_set_charset($db,"utf8");

//si el bd no existe que haga algo
if(!$db){
echo "error en la conexion";
exit; //ya no continua para abajo es como un return
}
//si existe
// echo "db existe";

//el archivo servicios.json se comienza creando un objeto y los demas como un string
//conectar a una base de datos de mysql
//ir a funciones