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
		<title> Exhibitor </title>
	</head>
	<body>
		<?php include 'header.php';?>
    <section>
      <div class="bg pic4 img-responsive container-fluid">
        <div class="hero-message text-center col-xs-12">

          <!-- NAV BAR TITLE HERE ************************************ -->
          <h1>EXHIBITION <span style="color:white">SPACE</span></h1>
          <div style="text-align:left">
                <p> <span class="fa fa-bicycle bulletpoint"></span>$8.00 per square foot of  exhibition, minimum of a 100 squared   feet  (10&rsquo; x 10&rsquo;) for exhibition of products and/or services.  </p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Exhibition Load In:<br> October 14 2016<br>Setup:<br>10:00 am to 9:00 pm</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Exhibition:<br>October 15 / 16 2016<br>Duration:<br>Saturday - 9:00 am to 7:00 pm<br>Sunday - 9:00 am to 6:00 pm</p>
              <h1 id="inversion">Investment $800.00</h1>
            </div>
         </div>
          
        </div>
      </div>
   </section>    
   
   <!-- **************************************************
    ******************** FOOTER ***************************
    *****************************************************-->
    
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="animate.js"></script>
	</body>
</html>
