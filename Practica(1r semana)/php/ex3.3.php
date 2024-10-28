<html>

    <body>
    <a href="ex3.3.php">Reiniciar</a>
            <form action="ex3.3.php" method="post">
                <label for="number">Numero1</label>
                <input type="text" name="number1"></input><br>
                <label for="number">Numero2</label>
                <input type="text" name="number2"></input><br>
                <label for="number">Sumar = 1 | Multiplicar = 2</label>
                <input type="text" name="operacio"></input><br>
                <button>Enviar</button>

            </form>
           
    </body>

</html>

<?php 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operacio = $_POST['operacio'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if($operacio == 1){
       $sumult = $number1 + $number2;
       echo "el resultat de la suma es ". $sumult;
    }else if($operacio == 2){
        $sumult = $number1 * $number2;  
        echo "el resultat de la multiplicacio
         es ". $sumult;
    }

}   
?>