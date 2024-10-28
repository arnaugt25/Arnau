<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php if(!isset($_POST["name"]) || !isset($_POST["number"]) ) { ?>
    <div>
    <form action="ex3.php" method="post">
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name">
        </div>  
        <div>
            <label for="repetir">Quantes vegades?</label>
            <input type="number" name="repetir">
        </div>
        <button type="submit" >Enviar</button>
    </form>  
    </div>
    <?php } else { 
        for($i=0; $i < $_POST["repetir"]; $i++){
    ?>
            <?php echo $_POST["name"] . " " . $i . "<br>"; ?>
        
    <?php 
        }}
    ?>


</body>
</html>
