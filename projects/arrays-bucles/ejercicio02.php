<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Tabla de multiplicar</title>
</head>
<body>
<?php
for ($numero = 1;$numero <= 10; $numero++){
echo "Tabla del $numero";
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
echo "</table>";
echo "<br />";
}
?> 
</body>
</html>