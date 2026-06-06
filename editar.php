<?php
// editar.php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT);
    $cantidad = filter_input(INPUT_POST, 'cantidad', FILTER_VALIDATE_INT);

    if ($id && $nombre && $precio !== false && $cantidad !== false) {
        $sql = "UPDATE productos SET nombre = :nombre, precio = :precio, cantidad = :cantidad WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            ':id' => $id,
            ':nombre' => $nombre,
            ':precio' => $precio,
            ':cantidad' => $cantidad
        ]);

        header("Location: index.php");
        exit;
    }
}
?>