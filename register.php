<?php
// register.php

// Incluir el archivo de conexión
include 'db.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre del formulario
    $nombre = $_POST['nombre'];

    // Preparar la consulta SQL para insertar el nombre en la base de datos
    $sql = "INSERT INTO nombre (nombre) VALUES (:nombre)";
    $stmt = $pdo->prepare($sql);

    // Ejecutar la consulta con el nombre recibido
    try {
        // Ejecutar la consulta de inserción
        $stmt->execute([':nombre' => $nombre]);
        echo "<p>¡El nombre '$nombre' se ha registrado exitosamente!</p>";
    } catch (PDOException $e) {
        echo "<p>Error al registrar el nombre: " . $e->getMessage() . "</p>";
    }
}
