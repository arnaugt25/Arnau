const text = prompt("Escriu una frase");

const paraules = text.toLowerCase().split(" ");

const comptador = {};

// for each  para recorrer arrays
paraules.forEach(function (paraula) {
  if (comptador[paraula]) {
    comptador[paraula]++;
  } else {
    comptador[paraula] = 1;
  }
});

for (const paraula in comptador ) {
  console.log(paraula + " : " + comptador[paraula] + " vegades");
}
