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
$numero_elementos = $_GET ["numero_elementos"];
$temperaturas = array();
// Inicializamos el array de temperaturas
$i = 0;
while ($i < $numero_elementos) {
    $temperaturas[$i] = rand(1,30);
    $i++;
}
echo "<pre>";
print_r($temperaturas);
echo "</pre>";

$suma = 0;
$i = 0;
while ($i < $numero_elementos) {
    $suma = $suma + $temperaturas[$i];
    $i++;
}
$media = $suma / $numero_elementos;
print_r($media);

$i = 0;
$maxima = $temperaturas[0];
while ($i < $numero_elementos) {
    if ($temperaturas[$i] > $maxima) {
        $maxima = $temperaturas[$i];
    }
    $i++;
}
echo "<br>";
echo "<br>";
print_r($maxima);
echo "<br>";
echo "<br>";

$i = 0;
$minima = $temperaturas[0];
while ($i < $numero_elementos) {
    if ($temperaturas[$i] < $minima) {
        $minima = $temperaturas[$i];
    }
    $i++;
}

print_r($minima);

?>
</body>
</html>