var blanco = "___";
var negro = "██";
var numero = prompt(numero);
parseFloat = (numero);
var i = 1;
parseFloat = (i);

document.write("<table border : 5px  >")
for(var i = 1; i <= numero/2; i++){
    document.write("<tr>");
    for(var a = 1; a <= numero/2; a++){
        document.write("<td>"+ blanco +"</td>");
        document.write("<td>"+ negro + "</td>");

    }
    document.write("<tr>")
    for(var b= 1; b <= numero/2 ; b++){
        document.write("<td>"+ negro + "</td>");
        document.write("<td>"+ blanco + "</td>");
        
    }
    
};
document.write("</table>")