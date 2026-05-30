<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

mysqli_query($conexion,
"INSERT INTO productos(nombre,precio,cantidad)
VALUES('$nombre','$precio','$cantidad')");

header("Location:index.php");

?>