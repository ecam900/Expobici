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

		<link rel="stylesheet" type="text/css" href="master.css">
		<title> ExpoBiciPR </title>
	</head>
	<body>
	
	
	<?php include 'header.php';?>


    <!-- **************************************************
    ************************ HERO TEXT ********************
    *****************************************************-->
    <section>
      <div class='hero container-fluid text-center'>
        <div class='hero-message col-xs-8 col-xs-offset-2'>
          <h1> EXPO<span style="color:white">BICI</span>PR</h1>
          <h3> OCTOBER 15/16 2016 </h3>
          <h3> PUERTO RICO <span style="white-space:nowrap">CONVENTION CENTER</span></h3>
          <h3 style="white-space:nowrap"> EXHIBIT HALL C </H3>
      </div>
    </section>


    <!-- **************************************************
    ***************** SECOND SECTION  *********************
    *****************************************************-->
    <section id="second-section">
      <div class='container-fluid text-center'>
        <h3 id="el-evento"> EXPOBICI<span style="color:#F2A413"> THE EVENT</span> </h3>
      </div>

      <div class="sectwo container-fluid">
          <div id="secbox1" class="secbox transparent_box text-center col-sm-6 col-xs-12">
            <h4> DESCRIPTION </h4>
            <div class="row">
              <div class="rowItem col-xs-2">
                <div class="circle-border">
                  <i class="fa fa-bicycle"></i>
                </div>
              </div>
              <div class="sectext">
                <p>
                  The first cyclist Expo in Puerto Rico. Targeted to all the 	cyclist community, from professional to 
                  recreational cyclists will be able to share in a safe environment. There will be over 160 exhibitions that 
will be presenting the new models of bicycles, accessories and sporting clothes. There will also be an 
educational discussion where you and the audience will be able to enjoy and take part in a cycling ride 
for the cyclists rights.

                </p>
              </div>
            </div>
          </div>
          <div id="secbox2" class="secbox transparent_box text-center col-sm-6 col-xs-12">
            <h4> WHEN? </h4>
            <div class="row">
              <div class="rowItem col-xs-2">
                <div class="circle-border">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
              <div class="left-date">
                <h3> October 15 / 16 , 2016 </h3>
              </div>
              <img class="box2pic img-responsive" src="../images/pcc.png"></img> 
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
