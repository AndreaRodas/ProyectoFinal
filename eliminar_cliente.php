<?php include ("conexion_cliente.php")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Taller-Tek</title>
        <link rel="icon" type="image/x-icon" href="img/logo.ico" />
       
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
     
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
       
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="principal.php">Taller-Tek</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu    
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tablareparacion.php">Registro de Reparación</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tablarepuestos.php">Stock Repuestos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tablaclientes.php">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tablavehiculo.php">Vehículos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Taller-Tek</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Sabemos lo que tu auto significa para ti!</h2>
            
        
        <?php

if(isset($_GET['id_cliente'])){
   $id_cliente = $_GET ['id_cliente'];
   $query = "DELETE  FROM clientes WHERE id_cliente= $id_cliente";
   $result =mysqli_query($conn, $query);
   if (!$result){
       die("Query Failed");

   }
   $_SESSION ['message'] = 'Cliente Eliminado';
   $_SESSION ['message_type'] = 'dark'; 
   
}
?>
<div class="alert alert-dark" role="alert">
   Cliente Eliminado
</div>

<form action="tablaclientes.php" method="post" >
  <center>
<input type="submit" class="btn btn-primary js-scroll-trigger"name="volver" value="Volver">
</center>
</form>
</div>
            </div>
        </header>
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Taller-Tek</div></footer>
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
</html>
