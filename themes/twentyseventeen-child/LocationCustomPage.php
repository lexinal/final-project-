<html>
<?php /* Template Name: Location Custom Page */ ?>

<?php get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
 

  	<div align="left">
  	<img src="https://www.escapetothepalace.com/wp-content/uploads/2018/07/jane-fitness-peitoral.gif" alt="Workout photo">
  </div>

    <h3>Discover Fitness Locations to Jumpstart Your Journey</h3>
    <p> When it comes to fitness, there are plenty of options in the D.C. area. The variety and choices are endless. From running locations to organized classes, you will be in for a sweat fest! Just try not to forget your towel and water source! </p>

    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Washington, DC
  var washington = {lat: 38.9072, lng: -77.0369};
  // The map, centered at washington, d.c.
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 12, center: washington});

  

  // The marker, positioned at Orange Theory
 
  var markerOrangeTheory = new google.maps.markerOrangeTheory({
  	 position:{lat: 38.901672, lng:-77.016350},
  	 map: map
  	});

  var infoWindow1 = new google.maps.InfoWindow1({
  	content: '<h1>Orange Theory</h1>'
  });

  OrangeTheorymarker.addListener('click', function(){
  	infoWindow1.open(map,OrangeTheorymarker);
  });


//The marker is positioned at Corepower
  var markerCorepower = new google.maps.markerCorepower({
  	 position:{lat: 38.900092, lng:-77.024149},
  	 map: map
  	});

  var infoWindow2 = new google.maps.InfoWindow2({
  	content: '<h1>Corepower</h1>'
  });

  markerCorepower.addListener('click', function(){
  	infoWindow2.open(map,markerCorepower);
  });

  
//The marker is positioned at F45
  var markerF = new google.maps.MarkerF({
  	 position:{lat: 38.916855, lng:-77.026642},
  	 map: map
  	 
  	});

  var infoWindow3 = new google.maps.InfoWindow3({
  	content: '<h1>F45 Fitness</h1>'
  });

  markerF.addListener('click', function(){
  	infoWindow3.open(map,markerF);
  });



//The Marker is positioned at 305 Fitness
  var marker3F = new google.maps.Marker3F({
  	 position:{lat: 38.920085, lng:-77.030798},
  	 map: map
  	 
  	});

   var infoWindow4 = new google.maps.InfoWindow4({
  	content: '<h1>305 Fitness</h1>'
  });

  marker3F.addListener('click', function(){
  	infoWindow4.open(map,marker3F);
  });



//Positioned at Barry's Bootcamp
var markerBarry = new google.maps.MarkerBarry({
  	 position:{lat: 38.909298, lng:-77.044412},
  	 map: map
  	 
  	});

  var infoWindow5 = new google.maps.InfoWindow5({
  	content: '<h1>Corepower</h1>'
  });

  markerBarry.addListener('click', function(){
  	infoWindow5.open(map,markerBarry);
  });


//Marker is Fuse Pilates
var markerFuse = new google.maps.markerFuse({
  	 position:{lat: 38.906014, lng:-77.032074},
  	 map: map
  	 
  	});

  var infoWindow6 = new google.maps.InfoWindow6({
  	content: '<h1>Fuse Pilates</h1>'
  });

  markerFuse.addListener('click', function(){
  	infoWindow6.open(map,markerFuse);
  });


//marker for exorcist steps
var markerSteps = new google.maps.markerSteps({
  	 position:{lat: 38.9055444, lng:-77.0701639},
  	 map: map
  	 
  	});
 
 var infoWindow7 = new google.maps.InfoWindow7({
  	content: '<h1>Exorcist Steps</h1>'
  });

  markerSteps.addListener('click', function(){
  	infoWindow7.open(map,marker)Steps;
  });

} 

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv5BVPXJMDEx-398zhzCKQmqjke39Dqfg&callback=initMap">
    </script>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</html>
<?php
get_footer();
