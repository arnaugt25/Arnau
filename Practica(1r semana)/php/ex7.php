<html>
    <body>
        <form method="POST">
            Introdueix un valor per n: <input type="number" name="n" required>
            <input type="submit" value="Mostrar números primers">
        </form>
    </body>
</html>

<?php 

function esPrimer($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2 ; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

    $n = $_POST['n'];
    $comptador = 0;
    $numero = 2;

    echo "Els primers $n números primers són:<br>";

    while ($comptador < $n) {
        if (esPrimer($numero)) {
            echo $numero . "<br>";
            $comptador++;
        }
        $numero++;
    }

?>


