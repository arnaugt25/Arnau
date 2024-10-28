<html>
    <body>
        <form method="post" action="ex11.php">
            <label for="paraula">Escriu una paraula:</label>
            <input type="text" id="paraula" name="paraula" min="1" required>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php 
 

 if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paraula'])) {

    $paraula = $_POST['paraula'];

        function cadenarevers($cadena){
            $reversa = "";
            for ($i =  strlen($cadena) - 1; $i>= 0; $i--){
                $reversa .= $cadena[$i];
            }
            return $reversa;
        }
        echo "Palabra invertida: " . cadenarevers($paraula);

}

?>