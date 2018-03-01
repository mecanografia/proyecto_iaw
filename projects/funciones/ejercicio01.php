<?php
echo "<h1>Tabla de multiplicar con function</h1>";

imprimir_tabla_multiplicar(9);
function imprimir_tabla_multiplicar ($numero) {
    echo "<table border=\"1\"";
    for ($i = 0; $i < 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td> x </td>";
        echo "<td>$i</td>";
        echo "<td> = </td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }
} 

?>