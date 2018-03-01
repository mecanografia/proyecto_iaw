<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ejercicio 12</title>
</head>
<body>
<form method="get">
    <label for="numero">Número: </label>
    <select name="numero">
        <option value="1">1</option> 
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6" selected>6</option>
    </select>
<br>
<input type="submit" value="Enviar">
</form>
<?php

$dado= rand(0,5);

if($dado == 0){
    print "<img src=\"images/1.jpg\" width=\"200 height=\"200\">";
}elseif($dado == 1){
    print "<img src=\"images/2.jpg\" width=\"200 height=\"200\">";
}elseif($dado == 2){
    print "<img src=\"images/3.png\" width=\"200 height=\"200\">";
}elseif($dado == 3){
    print "<img src=\"images/4.png\" width=\"200 height=\"200\">";
}elseif($dado == 4){
    print "<img src=\"images/5.png\" width=\"200 height=\"200\">";
}elseif($dado == 5){
    print "<img src=\"images/6.jpg\" width=\"200 height=\"200\">";
}
?>
</body>
</html>