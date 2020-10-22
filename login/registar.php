<?php
  require '../conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registrar Usuario</title>

  <!-- Bootstrap core CSS -->
  <link href="taller/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/login.min.css" rel="stylesheet">

</head>

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/video.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">Taller</h1>
            <form action="registrar.php" method="POST">
            <div class="input-group input-group-newsletter">
              <input type="text" name= "nombre" class="form-control" placeholder="Ingresar Usuario o Correo" aria-label="Ingresar Usuario">
              </div>
             <br></br>
              <div class="input-group input-group-newsletter">
                <input type="password" name="contraseña" class="form-control" placeholder="Ingresar Contraseña" aria-label="Ingresar Contraseña"> 
              </div>
              <br></br>
                  <button class="btn btn-secondary" type="submit" value="submit"><nav class="sb-sidenav-menu-nested nav"> <a class="nav-link"  href="../principal/principal.html">Confirmar</a></nav></button>
          </div>
        </div>
      </div>
    </div>
  </div> 
  </form>
  <!-- Bootstrap core JavaScript -->
  <script src="taller/jquery/jquery.min.js"></script>
  <script src="taller/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/login.min.js"></script>

</body>

</html>