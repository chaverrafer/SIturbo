 <!-- Soluciones Informaticas -->
<!DOCTYPE html>
<html lang="es">

<head>
<title>Contacto</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="soluciones informaticas, desarrollos web, marketing digital, diseño grafico, sitios web, aplicaciones web">
    <meta name="author" content="Soluciones Informaticas">
    <link href="img/s.ico" rel="icon">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/small-business.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link href="css/estilo.css" rel="stylesheet" >
</head>

<body>
    <header>
        <div class="full-width">
            <nav role="navigation" class="navbar navbar-default  navbar-inverse">
                <div class="container">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="index.php" class="navbar-brand"><img src="img/soluciones.png"> </a>
                        </div>
                        <div id="navbarCollapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="somos.php">Somos</a></li>
                                <li><a href="servicios.php">Servicios</a></li>
                                <li><a href="portafolio.php">Portafolio</a></li>
                                <li class="active"><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </div>
                    </div>       

                </div> 
            </nav>
        </div>
    </header>


    <!-- Page Content -->
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe class="img_pie" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.201889324262!2d-58.4666364849486!3d-34.54844336208223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb69d9f34c0a5%3A0x8df08d8a3cce17c0!2sArcos+3483%2C+C1429AZM+CABA!5e0!3m2!1ses!2sar!4v1457637669402" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div><!-- Cierre del Col-md-6 -->

                <div class="col-md-6">
                        <div id="contenedor">
                            <h1>Contacto</h1>
                            <div id='cssmenu'>  </div>
                                <div id="contenido">
                                                
                                    <section class="formulario">
                                        <form action="enviar.php" method="post">
                                            <label class="titulo2"for="nombre">Nombre:</label>
                                            <input id="nombre" type="text" name="nombre" placeholder="Nombre y Apellido" required="" />
                                            <label class="titulo2"for="email">Email:</label>
                                            <input id="email" type="email" name="email" placeholder="ejemplo@correo.com" required="" />
                                                            
                                            <label class="titulo2"for="asunto">Asunto:</label>
                                            <input id="asunto" type="text" name="asunto" placeholder="Asunto del Mensaje" required="" />
                                                            
                                            <label class="titulo2"for="mensaje">Mensaje:</label>
                                            <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required=""></textarea>
                                            <input id="submit" type="submit" name="submit" value="Enviar" />
                                        </form>
                                    </section>

                                </div>

                            </div><!--Cierra contenedor-->
                </div><!-- Cierre del Col-md-6 -->
                
                

                   
                      
             </div><!--Cierra Row-->    
 </div> <!-- /.container -->
   

    
       
 <!-- Footer -->
    <footer>
    <div class="container">

        <div class="row">
                <div class="col-md-6">
                  <img class="img_pie img-responsive"src="img/logo_pie.png" alt="logo soluciones informaticas">
              <h1>Contactos Web</h1>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6 pie">
                    <p>Fernando Chaverra: (+54) 11 3765 3007 </p>
                    <p>Email: soluciones@siturbo.com</p> 
                    <p>Buenos Aires - Capital Federal - Arcos 3483</p>  
                    <div class="alert alert-success text-center">
                    <p></p>
                      <strong>Escribenos, llamanos hoy mismo, realiza tus consultas y presupuesto !</strong>
                    </div>
                </div>
                
            </div><!-- /.col-md-3 -->
           
            <div class="text-center">
               
                    Copyright &copy; Soluciones Informaticas 2015
                </div>
    </div>

    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


