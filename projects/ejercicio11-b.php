<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio 11</title>
</head>
<body>
<form method="get">
    <label for="numero_monedas">Número de monedas: </label>
    <select name="numero_monedas">
        <option value="1">1</option> 
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
    </select>
    <label for="tipo_moneda">Tipo de moneda: </label>
    <select name="tipo_moneda">
        <option value="dolar">Dólar Estadounidense</option>
        <option value="euro">Euro</option>
        <option value="yen">Yen japonés</option>
        <option value="libra">Libra esterlina</option>
        <option value="franco">Franco suizo</option>
    </select>
<br>
<input type="submit" value="Enviar">
</form>
<?php

$numero_monedas = $_GET["numero_monedas"];
$tipo_moneda = $_GET["tipo_moneda"];

echo $numero_monedas;
echo "<br>";
echo $tipo_moneda;
echo "<br>";
echo "<br>";
$monedas = array();

for ($i = 0; $i < $numero_monedas; $i++) {
    $monedas[$i] = rand(0,1);
}

$images = array();
$images ["dolar"]["cara"] = "images/cara_dolar.jpg";
$images ["dolar"]["cruz"] = "images/cruz_dolar.jpg";
$images ["euro"]["cara"] = "images/cara_euro.jpg";
$images ["euro"]["cruz"] = "images/cruz_euro.jpg";
$images ["yen"]["cara"] = "images/cara_yen.png";
$images ["yen"]["cruz"] = "images/cruz_yen.jpg";
$images ["libra"]["cara"] = "images/cara_libra.jpg";
$images ["libra"]["cruz"] = "images/cruz_libra.jpg";
$images ["franco"]["cara"] = "images/cara_franco.jpg";
$images ["franco"]["cruz"] = "images/cruz_franco.jpg";

/*
print "<img src=\"images/cara_franco.jpg\">";
*/
for ($i = 0; $i < $numero_monedas; $i++){
    if ($monedas[$i] == 0){
        echo "<img src=\"".$images[$tipo_moneda]["cara"]."\">";
    } else {
        echo "<img src=\"".$images[$tipo_moneda]["cruz"]."\">";
    }
}
?>
</body>
</html>