<html>
    <body>
        <form method="POST">
            Introdueix un valor per n: <input type="number" name="numero1" required><br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>

<?php 

 $numero1 = $_POST['numero1'];

 $num0 = 0;
 $num1 = 1;

if($numero1 <= 1){
    echo "El numero es invalid";
} else{
    for( $i = 1 ; $i < $numero1 ; $i++){
        $num2 = $num0 + $num1;
        echo $num0. " + " . $num1 . " = " . $num2 . "<br>";

        $num0 = $num1;
        $num1 = $num2;
    }
}

?>
