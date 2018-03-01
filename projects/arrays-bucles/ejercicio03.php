<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Temperaturas </title>
</head>
<body>
<form  method="get">
    <div>
        <label for="numero_elementos"Introduce el numero de elementos: </label>
        <input type="number" min="1" max="100" name="numero_elementos" value="">
    </div>
    <br>
    <input type="submit" value="Enviar"></input>
</form>
<?php

$numero_elementos = $_GET ["numero_elementos"];

if (!isset($numero_elementos) || empty($numero_elementos)) die;

$temperaturas = array();

// Inicializo el array de temperaturas
for ($i = 0; $i < $numero_elementos; $i++){
    $temperaturas[$i] = rand(1,30);
}

$suma = 0;
// Calculo la media
for ($i = 0; $i < $numero_elementos; $i++){
    $suma = $suma + $temperaturas[$i];
}

$media = $suma / $numero_elementos;

echo "<pre>";
print_r($temperaturas);
echo "</pre>";

// Calculo de la temperatura maxima con if
$maximo = $temperaturas[0];
for ($i = 1; $i < $numero_elementos; $i++) {
    if ($temperaturas[$i] > $maximo) {
        $maximo = $temperaturas[$i];
    }
}
// Calculo de la temperatura minima con if
$minimo = $temperaturas[0];
for ($i = 1; $i < $numero_elementos; $i++) {
    if ($temperaturas[$i] < $minimo) {
        $minimo = $temperaturas[$i];
    }
}
/*
// Calculo de la temperatura maxima con la funcion max
for ($i = 0; $i < $numero_elementos; $i++){
    $maximo = max($temperaturas);
}

// Calculo de la temperatura minima con la funcion min
for ($i = 0; $i < $numero_elementos; $i++){
    $minimo = min ($temperaturas);
}
*/
echo "<h4>Media: $media</h4>";
echo "<h4>Maximo: $maximo</h4>";
echo "<h4>Minimo: $minimo</h4>";
?>
</body>
</html>