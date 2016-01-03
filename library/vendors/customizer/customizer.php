<?php
/**
 * some_like_it_neat Theme Customizer
 *
 * @package some_like_it_neat
 *
 */

if ( ! function_exists( 'some_like_it_neat_init_customizer' ) ) :
/**
 * Load the customizer files and enqueue scripts
 *
 * @since  1.0.0.
 *
 * @return void
 */
function some_like_it_neat_init_customizer() {
	$path = trailingslashit( get_template_directory() ) . 'library/vendors/customizer/';
	// Utilities
	require_once( $path . 'panels.php' );
	require_once( $path . 'sections.php' );
	require_once( $path . 'controls.php' );
	require_once( $path . 'settings.php' );
	require_once( $path . 'defaults.php' );
	// Hookup santize functions
	require_once( $path . 'sanitize.php' );
}
endif;
add_action( 'after_setup_theme', 'some_like_it_neat_init_customizer' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

function some_like_it_neat_customize_preview_js()
{
    wp_enqueue_script('some_like_it_neat_customizer', get_stylesheet_directory_uri() . '/library/vendors/customizer/js/customizer.js', array( 'customize-preview' ), '20130508', true);
}
add_action('customize_preview_init', 'some_like_it_neat_customize_preview_js');
