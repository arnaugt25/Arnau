// 5------------------------------------------------------------------------------------- 

var numero = prompt("Escriu un numero");
numero = parseInt(numero)


    for ( i = 0; i < numero; i++){
        if (numero % i == 0){
            console.log(`${numero} = ${i}`);
        }
    }
