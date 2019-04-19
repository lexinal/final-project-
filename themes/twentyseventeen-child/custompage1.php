<html>
<?php /* Template Name: CustomPageT1 */ ?>

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
<html>
  <head>
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3>Discover Fitness Locations to Jumpstart Your Journey</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 38.9072, lng: -77.0369};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 12, center: uluru});
  // The marker, positioned at Orange Theory
  var marker = new google.maps.Marker({
  	 position:{lat: 38.901672, lng:-77.016350},
  	 map: map
  	});

  	var infoWindow = new google.maps.InfoWindow({
  		content:'<p>Orange Theory Fitness</p>'
  	});

  	marker.addListener('click', function(){
  		infoWindow.open(map, marker);
  	});

//The marker is positioned at Corepower
  var marker = new google.maps.Marker({
  	 position:{lat: 38.900092, lng:-77.024149},
  	 map: map
  	 
  	});
//The marker is positioned at F45
  var marker = new google.maps.Marker({
  	 position:{lat: 38.916855, lng:-77.026642},
  	 map: map
  	 
  	});
//The Marker is positioned at 305 Fitness
  var marker = new google.maps.Marker({
  	 position:{lat: 38.920085, lng:-77.030798},
  	 map: map
  	 
  	});
//Positioned at Barry's Bootcamp
var marker = new google.maps.Marker({
  	 position:{lat: 38.909298, lng:-77.044412},
  	 map: map
  	 
  	});

//Marker is Fuse Pilates
var marker = new google.maps.Marker({
  	 position:{lat: 38.906014, lng:-77.032074},
  	 map: map
  	 
  	});
//marker for exorcist steps
var marker = new google.maps.Marker({
  	 position:{lat: 38.9055444, lng:-77.0701639},
  	 map: map
  	 
  	});

}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv5BVPXJMDEx-398zhzCKQmqjke39Dqfg&callback=initMap">
    </script>
  </body>
</html>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</html>
<?php
get_footer();
