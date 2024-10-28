<?php
$numero = 7;
if(esPrimo($numero)){
    echo 'El numero ' ,$numero ,' es primo';
}else{
    echo 'El numero ' ,$numero ,' no es primo';
}

function esPrimo($numero)
{
    if(!is_numeric($numero))
        //Comprobamos si es un número valido, ya que sino nos dara un error 500. 
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            // No es primo :(
            return false;

        }

    }

    // Es primo :)
    return true;
}
?>