var cadena = prompt("Digues una paraula")
var lletres = [];


for(var i = 0   ;  i <= cadena.length; i++){
    var caracter  = cadena[i];
    if (/[a-zA-Z]/.test(caracter)){
        if (lletres[caracter]) {
     lletres[caracter] ++;
    }else{
        lletres[caracter] = 1;
    }
    }           
    
}console.log(lletres)
for(letra in lletres){
    console.log(`${letra}: ${lletres[letra]} veces`)
}
