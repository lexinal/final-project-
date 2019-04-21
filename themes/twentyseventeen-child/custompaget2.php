<?php /* Template Name: CustomPageT2 */ ?>

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
<br>

<h1>Hello there!</h1>
<p> To learn more about fitness opportunities or for any questions or concerns. Feel free to contact me using the contact form below. Looking forward to chatting! </p>

<img src="https://media1.popsugar-assets.com/files/thumbor/2NiNvc6TAAKseQPH1TrDvv06ZTM/fit-in/728xorig/filters:format_auto-!!-:strip_icc-!!-/2017/01/19/076/n/3019466/83db444b9172acf4_giphy/i/Every-time-something-big-happens-your-life-re-first-person-you-think-call.gif" alt="Dialing a Telephone GIF">

<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>

<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "alexiadnal@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>



		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
