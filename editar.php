<?php

include("conexion.php");

$id = $_GET['id'];

$consulta = mysqli_query($conexion,
"SELECT * FROM productos WHERE id='$id'");

$producto = mysqli_fetch_assoc($consulta);

?>

<!DOCTYPE html>
<html>

<head>

<title>Editar Producto</title>

<link rel="stylesheet" href="estilos.css">

</head>

<body>

<h1>Editar Producto</h1>

<form action="" method="POST">

<input type="text"
name="nombre"
value="<?php echo $producto['nombre']; ?>">

<input type="number"
step="0.01"
name="precio"
value="<?php echo $producto['precio']; ?>">

<input type="number"
name="cantidad"
value="<?php echo $producto['cantidad']; ?>">

<button type="submit">

Actualizar

</button>

</form>

</body>
</html>

<?php

if($_POST){

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

mysqli_query($conexion,

"UPDATE productos
SET
nombre='$nombre',
precio='$precio',
cantidad='$cantidad'
WHERE id='$id'"

);

header("Location:index.php");

}

?>