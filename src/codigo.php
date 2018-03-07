<?php
    include_once("config.php");
    if 
      $consulta = ("SELECT email, password FROM usuario WHERE email = 'usuario@usuario.es'");
      $result = mysqli_query($mysqli, $consulta);
      $res = mysqli_num_rows($result);
      $enviar = $_GET['submit'];
      if ($res >= 1) {
        header('Location: administration.html');
      } else {
        header('Location: error.php');
      }
?>