<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Formulario</title>
    <link rel="stylesheet" href="css/web.css">
</head>
<body>
    <div class="resultado">
        <h2>Datos Recibidos</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
        <p><strong>País:</strong> <?php echo $pais; ?></p>
        <p><strong>Comentarios:</strong> <?php echo $comentarios; ?></p>
    </div>
    
    <a href="index.php" class="volver">Volver al formulario</a>
</body>
</html> 