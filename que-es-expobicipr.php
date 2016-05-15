<!DOCTYPE html>

<html lang="es">

  <head>

      <!-- GOOGLE FONTS >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Stardos+Stencil:700' rel='stylesheet' type='text/css'>
      <!-- BOOTSTRAP >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <meta charset="utf-8">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="master.css"> 
	<link rel="stylesheet" type="text/css" href="other-pages.css">
    <title> ¿Qué es ExpoBiciPR? </title>
  </head>
  <body>
  
	<?php include 'header.php';?>

    <section>
      <div class="bg pic1 img-responsive container-fluid">
        <div class="hero-message text-center col-xs-12">

          <!-- NAV BAR TITLE HERE ************************************ -->
          <h1>¿QUÉ ES EXPO<span style="color:white">BICIPR?</span></h1>
          
          <div style="text-align:left">
            <p> <span class="fa fa-bicycle bulletpoint"></span>Un ambiente único diseñado y creado para el mundo del ciclismo: exhibiciones, exposiciones,
  presentaciones, charlas, ponencias, música; todo encaminado a contribuir con el desarrollo y
  crecimiento de aquellas personas que viven y disfrutan el deporte del ciclismo.</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Esta va a ser la Convención anual a la altura que se merecen todas aquellas personas, deportistas
            relacionadas con la industria y el deporte del ciclismo.</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Habrá exhibiciones de bicicletas, accesorios, equipo, ropa deportiva, productos nutricionales para
      deportistas y toda la más alta tecnología disponible dentro del mundo del deporte. Esto se presentará en un área determinada y asignada para que los exhibidores presenten sus empresas y/o servicios. Se presentará lo último en tecnología, las más modernas bicicletas y accesorios de toda índole y se ofrecerán talleres y charlas relacionados para el mejoramiento del deporte del ciclismo en Puerto Rico.</p>
	  <p>
	  <span class="fa fa-bicycle bulletpoint"></span>RESERVA HOY PARA OBTENER UN DESCUENTO EN EL HOTEL OFICIAL DEL EVENTO !</p>
	  <p><span class="fa fa-bicycle bulletpoint"></span>PARA RESERVAR EN EL HOTEL OFICIAL DEL EVENTO OPRIMA AQUI: <a href= "https://www.starwoodmeeting.com/Book/ExpoBici2016" alt= "Hotel Oficial de ExpoBiciPR"> <span style="color:#AF0000">Hotel Oficial de EXPOBICIPR</span></a>
		</p>
          </div>
        </div>

      </div>
   </section>
   
	<?php include 'footer.php';?>

	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <!-- fix for navbar toggle not closing after opening -->
    <script>
       $(document).on('click','.navbar-collapse.in',function(e) {
          if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
              $(this).collapse('hide');
          }
      });
     </script>
    <script src="animate.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
  </body>
</html>