
<?php



$alumnos = array(
    "Antonio"=>"31",
    "María"=>"28",
    "Juan"=>"29",
    "Pepe"=>"27");

echo "<pre>";
print_r($alumnos);
echo "</pre>";
echo "<h1>De forma ascendente ordenado por valor.</h1>";
asort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h4>".$clave = $valor."</h4>";
}

echo "<h1>De forma ascendente ordenado por clave.</h1>";
arsort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h4>".$clave = $valor."</h4>";
}

echo "<h1>De forma descendente ordenado por valor.</h1>";
ksort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h4>".$clave = $valor."</h4>";
}

echo "<h1>De forma descendetne ordenado por clave.</h1>";
krsort($alumnos);

foreach ($alumnos as $clave => $valor) {
    echo "<h4>".$clave = $valor."</h4>";
}
?>