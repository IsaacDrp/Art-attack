<?php
$host = 'localhost';
$db = 'modalidades';
$user = 'sist_info';
$password = 'art-attack';

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error en la conexión: ' . $e->getMessage());

}
?>
