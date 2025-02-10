<?php
$servername = "localhost";
$username = "root";  // Usuario por defecto de XAMPP
$password = "";      // Sin contraseña por defecto
$dbname = "db_nombre";  // El nombre de tu base de datos

try {
    // Crear conexión usando PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurar el modo de error de PDO para excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa"; // Puedes dejar esto para verificar la conexión si lo deseas
} catch (PDOException $e) {
    // Si ocurre un error, mostrar el mensaje
    die("Conexión fallida: " . $e->getMessage());
}

