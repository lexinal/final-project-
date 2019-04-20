<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Woah! This looks like a fitness disaster.', 'twentyseventeen' ); ?></h1>
					<?php get_search_form(); ?>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'It looks like your fitness dreams were not found here.
					 Perhaps try a search on the left to be reunited with your fitness goals?', 'twentyseventeen' ); ?></p>
					 
					 <img src="https://cdn.telanganatoday.com/wp-content/uploads/2018/03/gym-2.jpg" alt="Disappointed Fitness Guy">


					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
