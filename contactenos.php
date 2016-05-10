<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'ExpoBiciPR Página Web'; 
		$to = 'rpva47@gmail.com'; 
		$subject = 'Mensaje de Contacto';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Entre su nombre porfavor.';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Entre su correo electrónico porfavor.';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Entre su mensaje porfavor.';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Su respuesta es incorrecta.';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Muchas gracias, se le responderá tan pronto sea posible.</div>';
	} else {
		$result='<div class="alert alert-danger">Lo sentimos, hubo un error al enviar su mensaje. Intente más tarde.</div>';
	}
}
	}
?>


<!DOCTYPE html>

<html lang="en">

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

		<link rel="stylesheet" type="text/css" href="master.css">
    <link rel="stylesheet" type="text/css" href="other-pages.css">
		<title> Expobici </title>
	</head>
	<body>
		<header>

      <!-- Static navbar -->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="branding-stuff col-xs-4">
                 <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                 <h1 class="brand-name"><a href="index.html">EXPOBICIPR</a></h1>
               </div>
            </div>
            <br class='clr' />

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id=".navbar-collapse">
              <ul class="nav navbar-nav navbar-left">
                <li class="navlink"><a href="que-es-expobici.html">QUE ES EXPOBICI?</a></li>
                <li class="navlink"><a href="expo.html">EXPO</a></li>
                <li class="navlink"><a href="oportunidades.html">OPORTUNIDADES</a></li>
                <li class="navlink"><a href="exhibidor.html">EXHIBIDOR</a></li>
                <li class="navlink"><a href="planos.html">PLANOS</a></li>
                <li class="navlink"><a href="auspicios.html">AUSPICIOS</a></li>
                <li class="navlink"><a href="publicidad.html">PUBLICIDAD</a></li>
                <li class="navlink"><a href="contactenos.php">CONTÁCTENOS</a></li>
                <li class="navlink"><a href="home.html">ENGLISH</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
		</header>
    <section>
      <div class="bg pic8 img-responsive container-fluid">
        <div class="hero-message text-center col-xs-10 col-xs-offset-1">

          <!-- NAV BAR TITLE HERE ************************************ -->
          <h1>CONTÁCTENOS<span style="color:white"></span></h1>
          
        </div>
        
        <div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Envianos un mensaje</h1>
				<form class="form-horizontal" role="form" method="post" action="contactenos.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellido" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Correo Electrónico</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Mensaje</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">¿Cuanto es 2 + 3= ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Su respuesta">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   

      </div>
   </section>
 
    <!-- **************************************************
    ****************** THIRD SECTION  *********************
    *****************************************************-->

    <section id="third-section">
      <div class="container-fluid">
        <!-- Section Row -->
        <div class="row">
          <div id="google-map" class="sec3box col-xs-12 col-sm-6">

            <!-- **************************************************
            ******************** GOOGLE MAPS  *************************
            *****************************************************-->

            <!-- No Scroll Overlay-->
            <div class="overlay" onClick="style.pointerEvents='none'"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.6812094031684!2d-66.09468868504679!3d18.452777987448503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c036f29951bae49%3A0xa204b5c28e7cd838!2sPuerto+Rico+Convention+Center!5e0!3m2!1sen!2sus!4v1462517960025" width="100%" height="374.44" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="contact-info col-xs-12 col-sm-6">
            <div class="row">
              <div class="col-xs-6">
                <h4 style="padding-bottom:10px"> Contacto </h4>
                <h5 style="white-space:nowrap">Toño Muñiz </h5>
                <div class="row">
                  <span style="white-space:nowrap">
                    <a href="callto:+17875275252"><i class="contact-icon fa fa-mobile" aria-hidden="true"></i> 787-527-5252</a>
                  </span>
                  <br>
                  <span style="white-space:nowrap">
                   <a href="mailto:tono@expobicipr.com"><i class="contact-icon-mail fa fa-envelope" aria-hidden="true"></i> tono@expobicipr.com</a>
                  </span>
                </div>
                <h5 style="white-space:nowrap"> José Alonso</h5>
                <div class="row">
                  <span style="white-space:nowrap">
                    <a href="callto:+17873781596"><i class="contact-icon fa fa-mobile" aria-hidden="true"></i> 787-378-1596</a>
                  </span>
                  <br>
                  <span style="white-space:nowrap"> 
                    <a href="mailto:jose@expobicipr.com"><i class="contact-icon-mail fa fa-envelope" aria-hidden="true"></i> jose@expobicipr.com</a>
                  </span>
                </div>
              </div>
              <!-- FACEBOOK INFO INSIDE CONTACT BOX -->
              <div class="facebook col-xs-12 col-sm-6">
                <h4>¡Danos un 'like' en Facebook!</h4>
                <div class='fb-logo'>
                  <a href="https://www.facebook.com/ExpoBicipr"><img id="fb-button" class="img-responsive" src="images/facebook.svg"></img></a>
                </div>  
              </div>
            </div> <!-- Contact Row End -->
          </div>

          

        </div>
      </div>
    </section>
	
    <!-- **************************************************
    ******************** FOOTER ***************************
    *****************************************************-->

    <section id="footer">

    </section> 





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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="animate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
