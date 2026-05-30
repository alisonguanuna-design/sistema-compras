<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Compras</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Sistema de Compras</h1>

<form action="agregar.php" method="POST">

    <input type="text" name="nombre" placeholder="Nombre del producto" required>

    <input type="number" step="0.01" name="precio" placeholder="Precio" required>

    <input type="number" name="cantidad" placeholder="Cantidad" required>

    <button type="submit">Guardar</button>

</form>

<table>

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Eliminar</th>
    <th>Editar</th>
    <th>Pagar</th>
</tr>

<?php

$consulta = mysqli_query($conexion, "SELECT * FROM productos");

while($fila = mysqli_fetch_assoc($consulta)){

?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['precio']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>

<td>

<a class="eliminar"
href="eliminar.php?id=<?php echo $fila['id']; ?>">
Eliminar
</a>

</td>

<td>

<a class="editar"
href="editar.php?id=<?php echo $fila['id']; ?>">
Editar
</a>

</td>

<td>

<a class="pagar"
href="pago.php?id=<?php echo $fila['id']; ?>">
Pagar
</a>

</td>
</tr>

<?php
}
?>

</table>

</body>
</html>