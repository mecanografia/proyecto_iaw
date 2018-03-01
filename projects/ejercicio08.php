<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio 08</title>
</head>
<body>
<form  method="post">
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
if (!empty($_POST["nombre"]) && !empty($_POST["mensaje"])) {
    echo "<br />";
    echo "nombre:" . $_POST["nombre"];
    echo "<br>";
    echo "mensaje:" . $_POST["mensaje"];
}
?>
</body>
</html>