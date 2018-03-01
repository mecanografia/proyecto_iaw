<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Temperaturas</title>
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
<<<<<<< HEAD
$numero_elementos = $_GET ["numero_elementos"];
$temperaturas = array();
for ($i = 0; $i < $numero_elementos; $i++){
    $temperaturas[$i] = rand(1,30);
}
=======

$numero_elementos = $_GET ["numero_elementos"];

$temperaturas = array();

// Inicializamos el array de temperaturas
for ($i = 0; $i < $numero_elementos; $i++){
    $temperaturas[$i] = rand(1,30);
}

>>>>>>> c4f318b422837b6cc4633320a75b3f87cdd8a70e
echo "<pre>";
print_r($temperaturas);
echo "</pre>";

<<<<<<< HEAD
$tempe = 0;
foreach ($temperaturas as &$valor) {
    $tempe = $tempe + $valor;
}

$temp = array();
$contador = 0;
=======
$temp = array();
$contador = 0;

foreach ($temperaturas as &$valor) {
    $temp = $temp + $valor;
}

$media = $temp / $numero_elementos;

>>>>>>> c4f318b422837b6cc4633320a75b3f87cdd8a70e
foreach ($temperaturas as &$valor) {
    $temp[$contador] = $valor;
    $contador++;
}
<<<<<<< HEAD
$media = $tempe / $numero_elementos;
$minima = min($temp);
$maxima = max($temp);

echo "<h4>Media: $media</h4>";
echo "<h4>Maximo: $maxima</h4>";
echo "<h4>Minimo: $minima</h4>";
=======


echo "<h4>Media: $media</h4>";
//Minima
$minima = min($temp);
//Maxima
$maxima = max($temp);
echo "<br>";
echo "<br>";
print_r($minima);
echo "<br>";
echo "<br>";
print_r($maxima);

>>>>>>> c4f318b422837b6cc4633320a75b3f87cdd8a70e
?>
</body>
</html>