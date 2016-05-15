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
    <title> Oportunidades </title>
  </head>
  <body>
  
	<?php include 'header.php';?>
  
    <section>
      <div class="bg pic3 img-responsive container-fluid">
        <div class="hero-message text-center col-xs-12">

          <!-- NAV BAR TITLE HERE ************************************ -->
          <h1>OPORTUNIDADES AL <span style="color:white">PARTICIPAR</span></h1>
          <div style="text-align:left">
              <p> <span class="fa fa-bicycle bulletpoint"></span>Presentación y lanzamientos de nuevos productos</p>
              <p> <span class="fa fa-bicycle bulletpoint"></span>Afianzar relaciones con clientes e intercambiar experiencias</p>
              <p> <span class="fa fa-bicycle bulletpoint"></span>Oportunidad de lanzamientos de líneas</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Distribuir muestras y promocionales</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Participar con acciones promocionales complementarias, eventos especiales y seminarios, reduciendo costo de promoción</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Contacto directo con los clientes dispuestos a comprar</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Oportunidad de realizar venta directa</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Participar en un evento con una gran cobertura de medios</p>
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