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
    <title> What is ExpoBiciPR? </title>
  </head>
  <body>
    <?php include 'header.php';?>
    <section>
      <div class="bg pic1 img-responsive container-fluid">
        <div class="hero-message text-center col-xs-12">

          <!-- NAV BAR TITLE HERE ************************************ -->
          <h1>WHAT IS EXPO<span style="color:white">BICI?</span></h1>
          
          <div style="text-align:left">
            <p> <span class="fa fa-bicycle bulletpoint"></span>A unique environment designed and created for the world of cycling: exhibitions, expositions,
presentations, lectures, speeches, music; all aimed at contributing to the development and
growth of those who live and enjoy the sport of cycling.</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>This will be the annual Convention for all persons in the sports related industry and what the
sport of cycling deserves.</p>
            <p> <span class="fa fa-bicycle bulletpoint"></span>There will be exhibits of bikes, accessories, equipment, sportswear, sports nutrition products
and all the latest technology available in the world of the sport. This will be presented in a
determined and assigned area where exhibitors presented their companies and / or services.
We will also offer lectures related to improving the sport of cycling in Puerto Rico.</p>
<p> <span class="fa fa-bicycle bulletpoint"></span>BOOK TODAY TO OBTAIN A DISCOUNT IN THE OFFICIAL HOTEL OF EXPOBICIPR !
TO BOOK IN THE OFFICIAL HOTEL OF THIS EVENT PLEASE CLICK THE FOLLOWING LINK: <a href= "https://www.starwoodmeeting.com/Book/ExpoBici2016" alt= "Official Hotel of EXPOBICIPR"> Official Hotel of EXPOBICIPR</a>
		</p>
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
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="jquery.bxSlider.js"></script>
		<script type="text/javascript">
  		$(document).ready(function(){
     		$('#slider').bxSlider({
    		ticker: true,
    		tickerSpeed: 5000,
			tickerHover: true
  		});
  		});
		</script>
		
	</body>
</html>
