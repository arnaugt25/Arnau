<?php
$numero = 10;


    if(!is_numeric($numero))
        //Comprobamos si es un número valido, ya que sino nos dara un error 500. 
        return false;
    
    for ($i = 1; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            echo $numero , " = " , $i , "<br>";

        }

    }
?>