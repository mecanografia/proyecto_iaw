<?php
include('src/config.php');

$email = "usuario@usuario.es";
$password = md5("usuario");

$query ="SELECT * FROM usuario WHERE email='$email' AND password='$password'";
$result = mysqli_query($mysqli, $query);

while($res = mysqli_fetch_array($result)) {
    echo "<h2>".$res['id']."</h2>";
    echo "<h2>".$res['nombre']."</h2>";
    echo "<h2>".$res['password']."</h2>";
    echo "<h2>".$res['email']."</h2>";
}
mysqli_close($mysqli);



?>