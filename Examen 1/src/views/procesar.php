<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <h2>Datos Recibidos</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Limpieza básica de datos
        function limpiarDato($dato) {
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato = htmlspecialchars($dato);
            return $dato;
        }

        // Recuperar y limpiar los datos
        $nombre = isset($_POST['nombre']) ? limpiarDato($_POST['nombre']) : '';
        $email = isset($_POST['email']) ? limpiarDato($_POST['email']) : '';
        $edad = isset($_POST['edad']) ? limpiarDato($_POST['edad']) : '';
        $pais = isset($_POST['pais']) ? limpiarDato($_POST['pais']) : '';
        $comentarios = isset($_POST['comentarios']) ? limpiarDato($_POST['comentarios']) : '';

        // Mostrar los datos
        echo "<div class='resultado'>";
        echo "<h3>Los datos que has introducido son:</h3>";
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Edad:</strong> " . $edad . " años</p>";
        echo "<p><strong>País:</strong> " . $pais . "</p>";
        echo "<p><strong>Comentarios:</strong> " . $comentarios . "</p>";
        echo "</div>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>

    <a href="index.php" class="volver">Volver al formulario</a>
</body>
</html> 