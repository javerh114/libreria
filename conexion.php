<?php
try {
    $pdo = new PDO("mysql:host=sql301.infinityfree.com;dbname=if0_39596020_dblibreria", "if0_39596020", "javerh114");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
?>
