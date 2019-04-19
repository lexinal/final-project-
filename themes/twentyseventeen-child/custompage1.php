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
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({
  	 position:{lat: 38.901672, lng:-77.016350},
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
