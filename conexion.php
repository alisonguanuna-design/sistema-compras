<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "compras"
);

if(!$conexion){
    die("Error de conexión");
}

?>