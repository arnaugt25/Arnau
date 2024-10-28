?>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paraula'])) {


$paraula = $_POST['paraula'];

function palindromo($text) {
    $textinvert = strrev($text);
    if ($text === $textinvert) {
      echo("es palindromo");
    } else {
      echo("no es palindromo");
    };
  
  };
  
palindromo($paraula);

}
?>