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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
</head>
			<title>My Fitness Map</title>
	<style>
	#map{
	height:400px;
	width:100%;
<body>
	<h1> join me on this fitness journey at one of these locations </h1>
	<div id="map"></div>
    <script>
    function initMap(){
    	//Map options
    	var options = {
    		zoom:8,
    		center:{lat:38.9072,lng:-77.0369}
    	}
    	// new map
    	var map = new
    	google.maps.Map(document.getElementByID('map'), options);
    	//Add marker
    	var marker = new google.maps.Marker({
    		position: {}
    	});

    }
    </script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHwzVMHtd0_AgjBgj5A_Kd0mi3j48CSvU&callback=initMap">
    </script>			
				</body>
				</html>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</html>
<?php
get_footer();
