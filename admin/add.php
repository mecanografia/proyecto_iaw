<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">	
	<title>Añadir producto</title>
</head>

<body>
	<form method="post" nombre="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nombre producto</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>Precio</td>
				<td><input type="text" name="precio"></td>
            </tr>
            <tr> 
				<td>Imagen</td>
				<td><input type="text" name="imagen"></td>
            </tr>
            <tr> 
				<td>Fabricante</td>
				<td><input type="text" name="fabricante"></td>
			</tr>
            <tr> 
				<td>Descripcion</td>
				<td><input type="text" name="descripcion"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
    </form>
    <?php
    include '../config.php';
	$nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $fabricante = $_POST['fabricante'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];

    $codigo = mysqli_query($mysqli, "SELECT * FROM fabricante WHERE nombre= '$fabricante'");

    while ($res = mysqli_fetch_array($codigo)){
        $cod=$res['codigo'];
    }
    $consulta = mysqli_query($mysqli, "INSERT INTO producto(nombre, precio, codigo_fabricante, imagen, descripcion) VALUES ('$nombre', '$precio', '$cod', '../images/$imagen.jpg', '$descripcion')");
?>
</body>
</html>