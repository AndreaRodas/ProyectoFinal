<?php
  require '../conexion.php';

  $message = '';

  if (!empty($_POST['nombre']) && !empty($_POST['contraseña'])) {
    $sql = "INSERT INTO usuario (nombre, contraseña) VALUES (:nombre, :contraseña)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['contraseña']);
    $password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contraseña', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Iniciar Sesión</title>

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
  <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
          <form action="iniciar.php" method="POST">
            <h1 class="mb-3">Taller</h1>
            <div class="input-group input-group-newsletter">
      <input name="nombre" type="text" placeholder="Enter your email">
      <input name="contraseña" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <!-- Bootstrap core JavaScript -->
  <script src="taller/jquery/jquery.min.js"></script>
  <script src="taller/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/login.min.js"></script>

</body>
</html>
