<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
?>


register_sidebar( array(
  'name' => '404 Page',
  'id' => '404',
  'description'  => __( 'Content for your 404 error page goes here.' ),
  'before_widget' => '<div id="error-box">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>'
) );
