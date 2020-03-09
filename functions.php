<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */

add_action( 'wp_head', function() {
	?>
	<link rel="stylesheet" href="https://use.typekit.net/mtt7sgh.css">
	<?php
} );

add_action( 'elementor/frontend/after_enqueue_styles', function() {
	wp_enqueue_style( 'hello-elementor-child-style', get_stylesheet_uri(), NULL, filemtime( get_stylesheet_directory() . '/style.css' ) );
// wp_enqueue_script( 'hello-elementor-child-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), filemtime( get_stylesheet_directory() . '/script.js' ) , true);
} );