<html>
    <body>
        <form method="post" action="ex13.php">
            <label for="paraula">Escriu una paraula:</label>
            <input type="text" id="paraula" name="paraula" min="1" required>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>


<?php 



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paraula'])) {

    $cadena = $_POST["paraula"];
    $vocales = 0;
    $consonantes = 0; 

for($i = 0;  $i <= strlen($cadena); $i++){
    $caracter  = strtolower($cadena[$i]);
    if ($caracter >= "a" && $caracter <= "z" ){
        if(
            $caracter == "a" || 
            $caracter == "e" || 
            $caracter == "i" || 
            $caracter == "o" || 
            $caracter == "u"){
            $vocales++;          
        }else{
            $consonantes++;
        }
    }
    
}

        echo('<h2>Resultados:</h2>');
        echo('<table border = 5px>');
        echo('<tr><th>Tipo</th><th>Cantidad</th></tr>');
        echo('<tr><td>Vocales</td><td> ' . $vocales . '</td></tr>');
        echo('<tr><td>Consonantes</td><td> ' . $consonantes . '</td></tr>');
        echo('</table>');
}

?>