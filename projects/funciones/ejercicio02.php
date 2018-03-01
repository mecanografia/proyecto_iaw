<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>/funciones/Ejercicio02.php</title>
</head>
<body>
<form  method="get">
    <div>
    <label for="numero_elementos"Introduce el numero de elementos: </label>
    <select name="numero_elementos">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
        <br>
        Introduce un numero minimo: 
        <input type="number" min="1" max="20" name="min" value="">
        <br>
        Introduce un numero maximo: 
        <input type="number" min="1" max="20" name="max" value="">
    </div>
    <br>
    <input type="submit" value="Enviar"></input>
</form>
<?php

$numero_elementos = $_GET["numero_elementos"];
$min = $_GET["min"];
$max = $_GET["max"];

function inicializar_array ($numero_elementos, $min, $max) {
    $listas = array();
    for ($i = 0; $i < $numero_elementos; $i++) {
        $listas[$i] = rand($min, $max);
    }
    return $listas;
}

$listaA = inicializar_array($numero_elementos, $min, $max);
echo "<pre>";
print_r($listaA);
echo "</pre>";
?>
</body>
</html>