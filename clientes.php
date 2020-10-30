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
        <form action="guardar_cliente.php" method="POST" enctype="multipart/form-data">
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Ingrese Datos del Cliente</h2>
                        
                        <div class="form-group">
                        <p class="text-white-50"><label for="nombre_apellido">Nombre Completo</label>
                        <input type="text" class="form-control" name = "nombre_apellido"id="nombre_apellido">
                    </p>
                    <div class="form-group">
                        <p class="text-white-50"><label for="nit">Nit</label>
                        <input type="text" class="form-control" name = "nit" id="nit">
                    </p>
                    <div class="form-group">
                        <p class="text-white-50"><label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name = "telefono" id="telefono">
                    </p>
                    <div class="form-group">
                        <p class="text-white-50"><label for="direccion">Direccion</label>
                        <input type="text" class="form-control" name = "direccion" id="direccion">
                    </p>
             
                    <button type="button" class="btn btn-primary js-scroll-trigger" data-toggle="modal" data-target="#exampleModal"><i class="far fa-save"></i>
                                                        Guardar
                                                      </button>
                                                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i> ¡AVISO!</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ¿Desea guardar los datos del cliente?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="submit" class="btn btn-primary js-scroll-trigger" name="guardar_cliente"
                                                                value="Guardar Cliente">
                                                              <button type="button" class="btn btn-primary js-scroll-trigger"data-dismiss="modal"><i class="fas fa-arrow-left"></i>Regresar</button>
                                                              
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>                   
                
            
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div> 
        <br></br>
        <br></br>
        <br></br>
        </form>
        </section>
       
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Taller-Tek</div></footer>
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
</html>
