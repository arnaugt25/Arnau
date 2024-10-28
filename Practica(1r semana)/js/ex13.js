var cadena = prompt("Digues una paraula")
var vocales = 0;
var consonantes = 0; 


for(i = 0;  i <= cadena.length; i++){
    caracter  = cadena[i];
    if (/[a-zA-Z]/.test(caracter)){
        if(
            caracter == "a" || 
            caracter == "e" || 
            caracter == "i" || 
            caracter == "o" || 
            caracter == "u"){
            vocales++;
            
        }else{
            consonantes++;
        }
    }
    
}

        document.write('<h2>Resultados:</h2>');
        document.write('<table border = 5px>');
        document.write('<tr><th>Tipo</th><th>Cantidad</th></tr>');
        document.write('<tr><td>Vocales</td><td> ' + vocales + '</td></tr>');
        document.write('<tr><td>Consonantes</td><td> ' + consonantes + '</td></tr>');
        document.write('</table>');