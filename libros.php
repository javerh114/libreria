<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h1 class="mb-4">Listado de Libros</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Fecha de Publicación</th>
            </tr>
        </thead>
        <tbody>
        <?php
        try {
            $sql = "SELECT * FROM titulos";
            $resultado = $pdo->query($sql);
            foreach ($resultado as $fila) {
                echo "<tr>";
                echo "<td>" . $fila['titulo'] . "</td>";
                echo "<td>" . $fila['tipo'] . "</td>";
                echo "<td>$" . number_format($fila['precio'], 2) . "</td>";
                echo "<td>" . date("d/m/Y", strtotime($fila['fecha_pub'])) . "</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "<tr><td colspan='4'>Error: " . $e->getMessage() . "</td></tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>
