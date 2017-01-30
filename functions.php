<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 900; /* pixels */
}

function senpress_setup() {
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 900, 1288 ); // Unlimited height, soft crop

	// Register custom image size for image post formats.
	add_image_size( 'sempress-image-post', 900, 1288 );

	// remove some theme supports from SemPress
	remove_theme_support( 'custom-background' );
	remove_theme_support( 'custom-header' );

	// remove some unneeded actions
	remove_action( 'wp_head', 'sempress_customize_css' );
	remove_action( 'customize_register', 'sempress_customize_register' );
}
/**
 * Tell WordPress to run sempress_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'senpress_setup', 12 );


/**
 * Enqueue theme scripts
 *
 * @uses wp_enqueue_scripts() To enqueue scripts
 *
 * @since SenPress 1.0.1
 */
function senpress_enqueue_scripts() {
	wp_enqueue_style( 'senpress-opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,300,700' );
	wp_enqueue_style( 'sempress-style', get_stylesheet_uri(), array( 'senpress-opensans' ) );
}
add_action( 'wp_enqueue_scripts', 'senpress_enqueue_scripts' );
