var numero1 = prompt("Quin numero vols ");

function factorial(numero1){

   
     if(numero1 <= 1){
        return 1;

    }else if( numero1 >=1){
        return numero1 * factorial(numero1 - 1)
    }
}

console.log(factorial(numero1));