<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Frozen Mind PC's</title>
    <link rel="shortcut icon" href="../images/frozen-brain.png">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/album.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="nav-link" href="admin/login.php">Log in</a>
      <form method="get">
        <input name="busqueda" class="form-control form-control-dark w-100" 
        type="text" placeholder="Search" aria-label="Search" method="get">
      </form>
      <a class="nav-link" href="admin/logout.php">Log out</a>
    </nav>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">



    </nav>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          
        </div>
      </div>
    </header>

    <main role="main">
<!--
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>
-->
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <?php
            include ("config.php");
            $consulta = mysqli_query($mysqli, "SELECT * FROM producto ");
            $contador = mysqli_num_rows($consulta);
            for ($i = 1;$i <= $contador; $i++) {
              $query = mysqli_query($mysqli, "SELECT * FROM producto WHERE codigo = $i");
              while($res = mysqli_fetch_array($query)) {
                echo"<br/>
                <img src=\"".$res['imagen']."\"width=\"150\" height=\"130\"/>
                <div class='col-md-4'>
                    <div class='card mb-4 box-shadow'>
                        <div class='card-body'>
                        <p class='card-text'>".$res['descripcion']."</p>
                            <div class='d-flex justify-content-between align-items-center'>
                            <div class='btn-group'>
                                <a href='productos/productos.php?codigo=".$res['codigo']."' target='_blank'
                                class=\"btn btn-sm btn-outline-secondary\">Ver</a>
                                
                            </div>
                                <small class='text-muted'>9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>";
              }
              }
              ?>
          </div>
        </div>
      </div>
    </main>
    </footer>
  </body>
</html>