<?php
include('../config.php');
session_start();
if($_SESSION['canAccess'] == false) {
    header('Location: login.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../images/frozen-brain.png">
    <title>Productos</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">

    <style type="text/css">
th {
    color: red;
}
td {
    color: blue;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet" type="text/css">

 <link type="text/css" href="../css/php.css">
  </head>

  <body>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="add.php">
                  <span></span>
                  Añadir producto <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Productos
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <h1 class="h2">Productos</h1>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Foto</th>
                  <th>Descripcion</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    include '../config.php';
                    $consult = mysqli_query($mysqli,"select * from producto ");
                    while($res = mysqli_fetch_array($consult)) {
                    echo "<tr>
                    <td>".$res['codigo']."</td>
                    <td>".$res['nombre']."</td>
                    <td>".$res['precio']."€</td>
                    <td><img src=\"".$res['imagen']."\"width=\"130\" height=\"100\"/></td>
                    <td>".$res['descripcion']."</td>
                    </tr>";
                    }
                  ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

  </body>
</html>