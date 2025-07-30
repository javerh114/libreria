<?php
try {
    $pdo = new PDO("mysql:host=db4free.net;port=3306;dbname=dblibreria", "usuario123", "tu_contraseña");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
?>
