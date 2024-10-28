<html>
    <body>
        <form method="post" action="ex10.php">
            <label for="num">Escriu un número:</label>
            <input type="number" id="numero" name="num" min="1" required>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php 



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['num'])) {
    $numero = ($_POST['num']);
    $blanco = "___";
    $negro = "██";

echo "<h2>Taulell d'escacs<h2>";
echo "<table border='1'>";
for( $i = 1; $i <= $numero/2; $i++){
        echo("<tr>");
    for( $a = 1; $a <= $numero/2; $a++){
        echo("<td>". $blanco ."</td>");
        echo("<td>". $negro . "</td>");

    }
    echo("<tr>");
    for( $b= 1; $b <= $numero/2 ; $b++){
        echo("<td>". $negro . "</td>");
        echo("<td>". $blanco . "</td>");
        
    }
}
};

?>

