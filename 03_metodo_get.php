<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite la siguiente info: </h1>
    <form action="03_metodo_get.php" method="get">
    Nombre:
    <input type="text" name="Nombre"/>
    <br>
    Fecha:
    <input type="date" name="Fecha" id=""/>
    <br>
    Observaciones:
    <input type="text" name="obs" id=""/>
    <br>
    <input type="submit" value="enviar"/>
</form>
<h2>Informacion enviada es: </h2>
<?php
print_r($_GET);
?>
</body>
</html>