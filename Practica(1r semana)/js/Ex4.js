// 4------------------------------------------------------------------------------------ 
var numero = prompt("Escriu un numero");

function primer(numero){
    for ( i = 2; i < numero; i++){
        if (numero % i == 0) {
            return numero + " no es primer";
        }
    }
    return numero + " es primer";
}

console.log(primer(numero));