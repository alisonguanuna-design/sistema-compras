<?php
// conexion.php

$host = '127.0.0.1';
$db   = 'compras'; // Nombre de la base de datos extraído del script SQL
$user = 'root';    // Usuario por defecto en entornos locales (XAMPP/MAMP)
$pass = '';        // Contraseña por defecto
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>