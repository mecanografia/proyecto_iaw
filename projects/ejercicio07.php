<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio 07</title>
</head>
<body>
<form  method="get">
    <div>
        <label for="name">Nombre:</label>
        <input type="text" name="nombre">
    </div>
    <div>
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje"></textarea>
</form>
<br>
<br>
<button type="submit">Submit</button>
<br>
<br>
<?php
if (!empty($_GET["nombre"]) && !empty($_GET["mensaje"])) {
    echo "<br />";
    echo "nombre:" . $_GET["nombre"];
    echo "<br>";
    echo "mensaje:" . $_GET["mensaje"];
}
?>
</body>
</html>