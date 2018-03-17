<?php
include ("../config.php");
$codigo = $_GET['codigo'];
$query = mysqli_query($mysqli, "SELECT * FROM producto WHERE codigo = $codigo");
while($res = mysqli_fetch_array($query)) {
    $codd = $res['codigo'];
    $nom = $res['nombre'];
    $pre = $res['precio'];
    $img = "<img src=\"".$res['imagen']."\"width=\"300\" height=\"260\"/>";
    $desc = $res['descripcion'];
    }
?>