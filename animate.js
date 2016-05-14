$(document).ready(function(){
   setTimeout(function(){
   			 $("#secbox1").removeClass("transparent_box");
         $("#secbox1").addClass("animated fadeInUp");
         $("#secbox2").removeClass("transparent_box");
         $("#secbox2").addClass("animated fadeInUp");
   },500);

   setTimeout(function(){
   			 $("#sec3").removeClass("transparent_box");
   			 $("#sec3").addClass("animated fadeInUp");
   },1700);


   $('.logoSlider').slick({
     dots: false,
     infinite: true,
     speed: 1200,
     slidesToShow: 4,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 2000
   });


});

