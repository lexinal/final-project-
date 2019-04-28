<?php /* Template Name: FitnessGaloreCustomPage */ ?>

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
			<h2> Hello Friends! </h2>
			<p> I personally tried a free week at each of these fitness locations and I narrowed it down to my three personal favs. These three workouts will fuel your mind and body. I highly recommend to check out these places. </p>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="https://cdn.styleblueprint.com/wp-content/uploads/2017/09/StyleBlueprintGuide_Orange_Theory_Midtown_Nashville_PRODUCT_03-2017-16.jpg" style="width:100%">
    <div class="text">Orange Theory: It offers group personal training workouts based on high intensity interval training that blend cardiovascular and strength training.</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="https://a.mktgcdn.com/p/UjZvnPRHw_a9FJfgvI2V8LHU6GB0-_BehdUdtIi6uTk/5472x3648.jpg" style="width:100%">
    <div class="text">Corepower Yoga: roots an intensely physical workout in the mindfulness of yoga, helping students change their bodies and their lives. Live Your Power.</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="http://prod.static9.net.au/_/media/Network/Images/2016/10/21/14/32/161021COACH_f45.gif" style="width:100%">
    <div class="text">F45:The concept of F45 is simple: all of the studios, whichever part of the world they are in, offer the same 45 minute high-intensity, circuit training class for studio members. The "F" - in case you were wondering - stands for "functional", relating to the engagement in exercises that mimic or recreate everyday movement.</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> 

<script> 

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
} 
</script>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
