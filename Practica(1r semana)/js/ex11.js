var paraula = prompt("Digues una paraula");


function cadenarevers(cadena){
    var reversa = "";
    for (var i = cadena.length - 1; i>= 0; i--){
        reversa += cadena[i];
    }
    return reversa;
}
document.write(cadenarevers(paraula));
