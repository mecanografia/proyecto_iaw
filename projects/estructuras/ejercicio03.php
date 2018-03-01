<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Dias</title>
</head>
<body>
<form  method="get">
    <div>
        <label for="dia">Introduce un dia: </label>
        <input type="int" name="dia">
    </div>
    <br>
    <input type="submit" value="Enviar"></input>
</form>
<?php

$dia = $_GET["dia"];

 switch ($dia) {
    case 1:
        echo "Lunes";
        break;

    case 2:
        echo "Martes";
        break;

    case 3:
        echo "Miercoles";
        break;

    case 4:
        echo "Jueves";
        break;

    case 5:
        echo "Viernes";
        break;

    case 6:
        echo "Sabado";
        break;
    
    case 7:
        echo "Domingo";
        break;
}
?>
</body>
</html>