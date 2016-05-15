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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="master.css">
	<link rel="stylesheet" type="text/css" href="other-pages.css">
		<title> Sponsors </title>
	</head>
	<body>
		<?php include 'header.php';?>
    <section> 
      <div class="bg pic6 img-responsive container-fluid">
        <div class="hero-message text-center col-xs-12">

          <!-- NAV BAR TITLE HERE ************************************ -->
          <div class="ausp">
            <h1>SPONSORS<span style="color:white"></span></h1>
            <div class="row">
              <div class="col-xs-6">
                <h2>PLATINUM SPONSOR</h2>
                <p>-Your logo on local TV Channels, press, social media and our website.</p>
                <p>-Digital Banner in our website 468x60.</p>
                <p>-Presence and mention during Press Conference.</p>
                <p>-3 commercials of 30ss to be played at Movie Theaters.</p>
                <p>-400 squared feet (20x20) of exhibition space.</p>
                <p>-Promotion placement on main stage and 2 speeches.</p>
                <p>-Promotion placement on the surrounding areas.</p>
                <p>-50 courtesy tickets for promotion.</p>
              </div>
              <div class="col-xs-6">
                <h2>GOLD SPONSOR</h2>
                <p>-Mention in all created Ads.</p>
                <p>-Presence and mention during Press Conference.</p>
                <p>-1 commercial of 30ss to be played at Movie Theaters.</p>
                <p>-200 squared feet (10x20) of exhibition space.</p>
                <p>-30 courtesy tickets for promotion.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <h2>SILVER SPONSOR</h2>
                <p>-Mention in all digital media.</p>
                <p>-Presence and mention during Press Conference.</p>
                <p>-100 squared feet (10x10) of exhibition space.</p>
                <p>-15 courtesy tickets.</p>
              </div>
            </div>
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
    <script src="animate.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
  </body>
</html>
