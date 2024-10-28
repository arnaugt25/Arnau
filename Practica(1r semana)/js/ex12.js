var paraula = prompt("Quina paraula vols comprovar")

function palindromo(text) {
    const textinvert = text.split("").reverse().join("");
    if (text === textinvert) {
      console.log("es palindromo");
    } else {
      console.log("no es palindromo");
    };
  
  };
  
palindromo(paraula);