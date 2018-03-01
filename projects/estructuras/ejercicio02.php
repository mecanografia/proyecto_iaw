<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Notas</title>
</head>
<body>
<form  method="get">
    <div>
        <label for="nota">Nota:</label>
        <input type="number" min="0" max="10" name="nota" value="0">
    </div>
    <br>
    <input type="submit" value="Enviar"></input>
</form>
<?php

$nota = $_GET["nota"];

if (isset ($nota)) {

echo "<h1>Nota: $nota</h1>";

if ($nota >= 0 && $nota < 5){
    echo "Insuficiente";
} else if ($nota >= 5 && $nota < 6){
    echo "Suficiente";
} else if ($nota >= 6 && $nota < 7){
    echo "Bien";
} else if ($nota >= 7 && $nota < 9){
    echo "Notable";
} else if ($nota >= 9 && $nota <= 10){
    echo "Sobresaliente";
} else {
    echo "La nota introduccida no es valida";
}
}
?>
</body>
</html>