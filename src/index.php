<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="get">
      <img class="mb-4" src="https://www.artescritorio.com/wp-content/uploads/2015/11/monsterball-portada.png" 
      alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Catch in!! o logeate</h1>
      <label for="inputUser" class="sr-only">Username</label>
      <input type="text" name="inputUser" class="form-control" placeholder="Username" autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="inputPassword" class="form-control" placeholder="Password">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    </br>
    <?php
    $user = mysql;
    if (($_GET["inputUser"] == alvaro) && ($_GET["inputPassword"] == alvaro)) {
    echo "<br />";
    header('Location: add.html');
    } else if (($_GET["inputUser"] == prueba) && ($_GET["inputPassword"] == prueba)) {
      echo "<br />";
      header('Location: prueba.html');
    }
    ?>
  </body>
</html>
