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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
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
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Registro de Datos de Reparaciones</h2>
                        
                        <table style="width: 100%;" class="table table-stripedd">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Falla</th>
                                    <th>Observaciones Técnicas</th>
                                    <th>Fecha de Ingreso</th>
                                    <th>Fecha de Egreso</th>
                                    <th>Observación Final</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                       $query = "SELECT * FROM reparacion";
                       $result = mysqli_query($conn, $query);
                       
                       while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><p class="text-white-50"><?php echo $row['falla'] ?></p></td>
                                    <td><p class="text-white-50"><?php echo $row['observaciones_tecnicas'] ?></p></td>
                                    <td><p class="text-white-50"><?php echo $row['fecha_ingreso'] ?></p></td>
                                    <td><p class="text-white-50"><?php echo $row['fecha_egreso'] ?></p></td>
                                    <td><p class="text-white-50"><?php echo $row['observacion_final'] ?></p></td>
                        
                                    <td>
                                  
                                        <a href="editar_reparacion.php?id_reparacion=<?php echo $row['id_reparacion']?>" class="btn btn-primary js-scroll-trigger">
                                        <i class="fas fa-edit"></i>

                                        </a>
                                        
                                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></i>
                                               
                                              </button>
                                              
                                              <!-- Modal -->
                                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i>AVISO</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Está seguro que quiere eliminar el dato de reparación?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <a href="eliminar_reparacion.php?id_reparacion=<?php echo $row['id_reparacion']?>" class="btn btn-danger btn-block">ELIMINAR<i class="fas fa-trash"></i></i>
                                        
                                        </a>
                                                      <button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><i class="fas fa-arrow-left"></i>Regresar</button>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              </div>
                                                </div>
                                              </div>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>







                    
                                                                   
                
            
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
