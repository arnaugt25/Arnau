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
                <!-- BOTÓN ARCOIRIS -->
                <div class="button-item" onclick="window.location.href='index.php?r=formulario/procesar'">
                <button class="btn-rainbow">Enviar</button>
                <style>
                    .btn-rainbow {
                        background: linear-gradient(90deg, #ff0000, #ff7f00, #ffff00, #00ff00, #0000ff, #4b0082, #8f00ff);
                        color: white;
                        padding: 12px 24px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        background-size: 200% auto;
                        animation: rainbow 3s linear infinite;
                    }
                    @keyframes rainbow { 
                        to { background-position: 200% center; }
                    }
                </style>
            </div>

    </form>
<br>

            <!-- BOTÓN RETRO -->
            <div class="button-item" onclick="window.location.href='index.php?r=botones'">
                <button class="btn-retro">Ver todos los botones</button>
                <style>
                    .btn-retro {
                        background: #ffd800;
                        color: #000;
                        padding: 12px 24px;
                        border: 3px solid #000;
                        box-shadow: 4px 4px 0 #000;
                        cursor: pointer;
                        transition: all 0.1s ease;
                    }
                    .btn-retro:active {
                        transform: translate(4px, 4px);
                        box-shadow: 0 0 0 #000;
                    }
                </style>
            </div>
</body>
</html>