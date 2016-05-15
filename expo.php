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
    <title> Expo </title>
  </head>
  <body>
  
	<?php include 'header.php';?>
	
    <section>
      <div class="bg pic2 img-responsive container-fluid">
        <div class="hero-message text-center col-xs-12">

          <!-- NAV BAR TITLE HERE ************************************ -->
          <h1>EXPO<span style="color:white">BICIPR</span></h1>
          <div style="text-align:left">
            <p> <span class="fa fa-bicycle bulletpoint"></span>Nos place informarles que celebraremos la primera ExpoBiciPR, los días 15 y 16 de octubre de 2016, en el
Centro de Convenciones de Puerto Rico, en San Juan PR. Lo invitamos a ser parte de esta gran feria y que
se incluya en el grupo pionero de este magno evento, el cual esperamos se convierta en la mayor actividad
dedicada a los ciclistas en Puerto Rico. ExpoBiciPR será la plataforma de negocios más grande para
presentar la última tecnología, accesorios, equipos, ropa y todo lo relacionado con el deporte del ciclismo
en Puerto Rico.</p>

            <p> <span class="fa fa-bicycle bulletpoint"></span>Si su empresa es proveedora de bicicletas, accesorios, ropa deportiva y productos nutricionales para
deportistas y quiere reunirse con los principales compradores del ciclismo este evento es para usted. Si
usted quiere llegar a un excelente y selecto grupo de consumidores, entonces esta es su OPORTUNIDAD,
de dar a conocer sus servicios y productos en la mejor plataforma de exhibición.</p>
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