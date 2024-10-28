<html>
    <body>
        <form method="post" action="ex15.php">
            <label for="paraula">Escriu una paraula:</label>
            <input type="text" id="paraula" name="paraula" min="1" required>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>


<?php 

$text = $_POST["paraula"];

$paraules = explode(" ", $text);
$comptador = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paraula'])) { 
// for each  para recorrer arrays
foreach ($paraules as $paraula) {
  if (isset($comptador[$paraula])) {
    $comptador[$paraula]++;
  } else {
    $comptador[$paraula] = 1;
  }
};

foreach($comptador as $paraula => $quantitat) {
  ECHO($paraula . " : " . $comptador[$paraula] . " vegades" . "<br>");
}
}
?>