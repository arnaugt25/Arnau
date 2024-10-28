<html>
    <body>
        <form method="POST">
            Introdueix un valor per n: <input type="number" name="numero1" required><br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>

<?php 
if (isset($_POST['numero1'])) {
$numero1 = $_POST['numero1'];

function factorial($numero1){ 
    if($numero1 <=1){
        return 1;
    }else if($numero1 >= 1){
        return ($numero1 * factorial($numero1 - 1));
    }
}

echo factorial($numero1);
}
?>