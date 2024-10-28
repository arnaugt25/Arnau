// Función que genera y muestra la secuencia de Fibonacci
function generarFibonacci(numero1) {
    var num0 = 0;
    var num1 = 1;

    console.log("La seqüència de Fibonacci és:");

    if (numero1 <= 1) {
        console.log("El número és invàlid");
    } else {
        // Imprimimos los dos primeros números
        console.log(num0); 
        console.log(num1);

        // Bucle para generar la secuencia
        for (var i = 2; i < numero1; i++) {
            var num2 = num0 + num1; // Sumar los dos números anteriores
            console.log(num0 + " + " + num1 + " = " + num2); // Mostrar la operación

            // Actualizamos los valores para la siguiente iteración
            num0 = num1;
            num1 = num2;
        }
    }
}

// Solicitar al usuario cuántos números de Fibonacci quiere generar
var numero1 = prompt("Quantes vegades vols?", 10);

// Convertir la entrada a número entero
numero1 = parseInt(numero1);

// Llamar a la función para generar la secuencia
generarFibonacci(numero1);
