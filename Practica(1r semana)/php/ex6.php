<?php 

    if(isset($_POST["number"])){
        $number = $_POST["number"];
    }else{
        $number = 0;
    }


    function calculdiv($number){
        $divisors = [];

        for ($i = 1; $i <= $number; $i++){
           if ($number % $i == 0){
               $divisors[] = $i;
           }
        }
        return $divisors;
    }
    
     
     echo "<pre>";
     print_r (calculdiv($number));
     echo "<pre>";
?>

<html>

    <body>
            <form action="ex6.php" method="post">
                <label for="number">Numero</label>
                <input type="text" name="number"></input><br>
                <button>Enviar</button>
            </form>
    </body>

</html>