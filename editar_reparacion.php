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
                </div>
            </div>
        </header>
        


        <?php
   if(isset($_GET['id_reparacion'])){
    $id_reparacion= $_GET['id_reparacion'];
    $query = "SELECT * FROM reparacion WHERE id_reparacion=$id_reparacion";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $falla= $row['falla'];
        $observaciones_tecnicas= $row['observaciones_tecnicas'];
        $fecha_ingreso= $row['fecha_ingreso'];
        $fecha_egreso= $row['fecha_egreso'];
        $observacion_final= $row['observacion_final'];  
    }
}
?>
      <form action="editar_reparacion_proceso.php?id_reparacion=<?php echo $_GET['id_reparacion']; ?>" method="POST">
        
     <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Ingrese Datos de la Reparación</h2>

                        <div class="form-group">
                        <p class="text-white-50"><label for="falla">Falla del Vehículo</label>
                        <input type="text" class="form-control" name = "falla" id="falla" autofocus value="<?php echo $falla; ?>"></p>
                   
                    <div class="form-group">
                        <p class="text-white-50"><label for="observaciones_tecnicas">Observaciones Técnicas</label>
                        <input type="text" class="form-control" name = "observaciones_tecnicas" id="marca" autofocus value="<?php echo $observaciones_tecnicas; ?>"></p>

                    <div class="form-group">
                        <p class="text-white-50"><label for="fecha_ingreso">Fecha de Ingreso</label>
                        <input type="text" class="form-control" name = "fecha_ingreso" id="fecha_ingreso" autofocus value="<?php echo $fecha_ingreso; ?>"></p>
                    <div class="form-group">
                        <p class="text-white-50"><label for="fecha_egreso">Fecha de Egreso</label>
                        <input type="text" class="form-control" name = "fecha_egreso" id="fecha_egreso" autofocus value="<?php echo $fecha_egreso; ?>"></p>
                    <div class="form-group">
                        <p class="text-white-50"><label for="observacion_final">Observaciones Finales</label>
                        <input type="text" class="form-control" name= "observacion_final" id="color" autofocus value="<?php echo $observacion_final; ?>"></p>
                        
                                                
                                             
                                               
                                                <button class="btn btn-primary js-scroll-trigger" name="update">
                                                 Actualizar
                                                 </button>
                                             
                                               
              <br></br>
      </form>
      </div>
    </div>
  </div>
</div>




        </section>
       
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Taller-Tek</div></footer>
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
</html>
