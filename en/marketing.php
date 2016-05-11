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
		<title> Marketing </title>
	</head>
	<body>
		<?php include 'header.php';?>
    <section>
      <div class="bg pic7 img-responsive container-fluid">
        <div class="hero-message text-center col-xs-12">

          <!-- NAV BAR TITLE HERE ************************************ -->
          <h1>Marketing <span style="color:white">Plan</span></h1>
          <div style="text-align:left">
            <p> <span class="fa fa-bicycle bulletpoint"></span>Television: 300 30ss Tv Spots on Wapa2, and Liberty, during 60 days.</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Television: 100 spot 30ss in Abc 5 "Vive tu Nite" program.</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Press:  8 Ads / 10” X 4” Full Color Full page.</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Radio: 30ss  spots during 30 days.</p>
           <p> <span class="fa fa-bicycle bulletpoint"></span>Promotion: Posters, Flyers, Banners.</p>
           <p> <span class="fa fa-bicycle bulletpoint"></span>Electronic billboard: 30 days before the event</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>Social Media: Twitter, Facebook, Instagram, YouTube</p>
           <p> <span class="fa fa-bicycle bulletpoint"></span>Website - <a href= "http://expobicipr.com">www.expobicipr.com </a></p>
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