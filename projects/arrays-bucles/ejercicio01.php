<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Tabla de multiplicar aleatoria</title>
</head>
<body>
<?php
$min = 1;
$max = 10;
$numero = rand($min, $max);

echo "<table border=\"1\">";
for($i = 1;$i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td> x </td>";
    echo "<td>$i</td>";
    echo "<td> = </td>";
    echo "<td>$resultado</td>";
    echo "</tr>";
}
?> 
</body>
</html>