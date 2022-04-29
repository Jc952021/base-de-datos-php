<?php


function obtenerServicios():array{
    try { //try y atchse usa en puntos criticos de tu aplicaion,en este caso se hace una lamada a la bd
        require "database.php";
        $sql="SELECT * FROM servicios;"; //seleciono todas las columnas de la tabla servicios
        //mysqly_query — Selecciona una base de datos y ejecuta una consulta sobre la misma
     $consulta= mysqli_query($db,$sql);
    // var_dump($consulta); //devuelve un resultado de sql y para 
       //obtener los resultados para que php lo peuda enntender
        //echo "<pre>";
       // mysql_fetch_assoc — Recupera una fila de resultados como un array asociativo pero del ultimo elemento
       //hay varios tipo de fetch pero el mas usado es el asoc
        //var_dump(mysqli_fetch_assoc($consulta));
        //echo "</pre>";

$arreglo =[];
$i=0;
while ($servicio=mysqli_fetch_assoc($consulta)) { 
    //var_dump($servicio); aca me traia cada servicio en un arreglo asociativo por separado pero lo queremos todos dentro de un arreglo
    //$arreglo[]=$servicio["nombre"]; //el $arreglo[] sign. al final del arreglo
    $arreglo[$i]["id"]=$servicio["id"]; //en arreglo en la posicion 0, y een esa posicion se crea un arr(obj) en su posicion id-creandolo sera igual al valor de servicios["id]
    $arreglo[$i]["nombre"]=$servicio["nombre"];
    $arreglo[$i]["precio"]=$servicio["precio"];
    $i++;
}
//   echo "<pre>";
//   echo json_encode($arreglo);
//  echo "</pre>";
return $arreglo;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtenerServicios();

//crear una funcion y en un try traer con require la base de datos
//crear una consulta para traer tdas las columnas de una base de datos,es como si lo estas consultando en la terminal
//para ver todos los arreglos(obj) dentro de un arreglo = asi viene la tabla servicios-aunque este tiene un arreglo de obj 
//el while va a dar vueltas hasta que no haya nada que mostrar en lo que le pasamos
//crear un arreglo para poner ahi todos los obj()arr(servicios), pero pero para llenar esto en diferenes posiciones se le agregar un i++ para que itere en diferentes obj(arr)
//y en cada arr(obj) se le agrega cada valor de servicio
//como  tenia ñ en la db se agrega al momento de crear la conexion un charset
//crear otro archivo php para ejecutar la funcion ahi -ir ahi