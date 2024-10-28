<html>
    <body>
        <form method="post" action="ex14.php">
            <label for="paraula">Escriu una paraula:</label>
            <input type="text" id="paraula" name="paraula" min="1" required>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paraula'])) { 
    $cadena = $_POST['paraula'];
    $lletres = [];

    for($i = 0; $i < strlen($cadena); $i++) {
        $caracter = strtolower($cadena[$i]);

        
        if ($caracter >= "a" && $caracter <= "z") {
            if (isset($lletres[$caracter])) {
                $lletres[$caracter]++;
            } else {
                $lletres[$caracter] = 1;
            }
        }
    }

    foreach ($lletres as $letra => $conteo) {
        echo $letra . " : " . $conteo . " veces<br>";
    }
}
?>
