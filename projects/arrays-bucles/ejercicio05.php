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
for ($i = 0; $i < $numero_elementos; $i++){
    $temperaturas[$i] = rand(1,30);
}
echo "<pre>";
print_r($temperaturas);
echo "</pre>";

$temp = 0;
$i = 0;
while ($i < $numero_elementos) {
    $temp = $temp + $temperaturas[$i];
    $i++;
}
$media = $temp / $numero_elementos;
print_r($media);

$i = 0;
while ($i < $numero_elementos) {
    $maxima = max($temperaturas);
    $i++;
}
echo "<br>";
echo "<br>";
print_r($maxima);

$i = 0;
while ($i < $numero_elementos) {
    $minima = min($temperaturas);
    $i++;
}

echo "<br>";
echo "<br>";
print_r($minima);
?>
</body>
</html>