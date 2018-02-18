<!DOCTYPE html>
<html lang="es">
	<head> 
<title>Contacto - Enviar</title>
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
	
	    <!-- Navigation -->
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
		<div id="contenido">
			<section class="formulario">
				<?php 
					$nombre= $_POST['nombre'];
					$email= $_POST['email'];
					$asunto= $_POST['asunto'];
					$mensaje= $_POST['mensaje'];
					$para='soluciones@siturbo.com';
		 		 	/*		 	1destino		 	2asunto		 	3cuerpo
				 	mail("info@impresosdidacticos.com",
				 			"enviado desde clase", "esto es mail :D"	);
					*/
					$destinatario="soluciones@siturbo.com, fernandochaverras@hotmail.com";
					$asunto="Mail Enviado desde www.siturbo.com";
					$cuerpo ="La persona: $nombre con asunto: $asunto, envió el siguiente mensaje: $mensaje . Su Email es: $email";
					// Para poder enviar HTML y caracteres especiales
					$cabeceras = 'MIME-Version: 1.0' . "\r\n";
					$cabeceras .='Content-type: text/html; charset=utf-8' . "\r\n";
					$cabeceras .='From: siturbo.com <soluciones@siturbo.com>'."\r\n";
					mail($email, "Recibimos tu Mensaje", " Recibimos tu Mensaje, Te daremos pronta respuesta", $cabeceras);
					mail($para, $asunto, $cuerpo, $cabeceras);
		 			/*$conexion= mysqli_connect('localhost','impresos_root','didacticos2016','impresos_clientes');
		  			$query="INSERT INTO clientes VALUES(NULL, '$nombre', '$email', '$asunto','$mensaje')";
		 			$insertar=mysqli_query($conexion, $query);
		 			if($insertar == false){
		 			echo " Error en el Sql";
					 } else
					   {
					 	echo "<span>Tu Mensaje se evió correctamente.... Nos contactamos. </span>";
					 } */
					 echo "<span>Tu Mensaje se evió correctamente.... Nos contactaremos con usted. </span>";
		 		?>
			</section>
        </div>
 <!--Cierra contenedor-->
</div>
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

			
   <script src="js/jquery.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>

</body>
</html>