<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link rel="stylesheet" href="css/web.css">
</head>
<body>
    <h2>Formulario de Datos Personales</h2>
    
    <form action="index.php?r=formulario/procesar" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="0" max="120" required>
        </div>

        <div class="form-group">
            <label for="pais">País:</label>
            <select id="pais" name="pais" required>
                <option value="">Selecciona un país</option>
                <option value="España">España</option>
                <option value="México">México</option>
                <option value="Argentina">Argentina</option>
                <option value="Colombia">Colombia</option>
                <option value="Chile">Chile</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4"></textarea>
        </div>

        <button type="submit">Enviar Datos</button>
    </form>
</body>
</html> 