var numero1 = prompt("quantes vegades vols");

var num0 = 0;
var num1 = 1;
    parseInt(num0);
    parseInt(num1);
console.log("La seqüència de Fibonacci és:");


if(numero1 <= 1){
    console.log("el numero es invalid")
}else{
    for(i = 1  ; i < numero1; i++){
        var num2 = num0 + num1;
    console.log(num0 + " + " + num1 +" = " + num2);a 

    num0 = num1;
    num1 = num2;
    };
}
    