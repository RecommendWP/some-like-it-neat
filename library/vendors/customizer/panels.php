<?php
/**
 * some_like_it_neat Theme Customizer
 *
 * @package some_like_it_neat
 * Look, I'm sorry about this messy file, mmkay? Saw Paul Underwood's  repo for extended customizer controls and had a
 * "moment." Okay? Below, just copy the controls you need to use and go bonkers, customize as needed. I started things
 * off by adding a Textarea for GA.
 */




/**
 * Customizer Some Like it Neat Add Panels
 */

 if ( ! function_exists( 'some_like_it_neat_add_panels' ) ) {

	function some_like_it_neat_add_panels( $wp_customize ) {
		/**
		 * Adding Panels for Colors
		 */
		 $wp_customize->add_panel(
			 'color_panel',
			 array(
				 'priority' => 10,
				 'capability' => 'edit_theme_options',
				 'theme_supports' => '',
				 'title' => __('Color Palette Settings', 'some-like-it-neat'),
				 'description' => __('Color palette related settings and config.', 'some-like-it-neat'),
			 )
		 );

		 /**
		 * Adding Panels for Home Page and Colors
		 */
		 $wp_customize->add_panel(
			 'site_content',
			 array(
				 'priority' => 5,
				 'capability' => 'edit_theme_options',
				 'theme_supports' => '',
				 'title' => __('General Site Content Settings', 'some-like-it-neat'),
				 'description' => __('Various site settings and config.', 'some-like-it-neat'),
			 )
		 );

		 /**
		 * Adding Panels for Mobile Navigation Settings and Options
		 */
		 $wp_customize->add_panel(
			 'navigation_panel',
			 array(
				 'priority' => 15,
				 'capability' => 'edit_theme_options',
				 'theme_supports' => '',
				 'title' => __('Navigation Settings', 'some-like-it-neat'),
				 'description' => __('Navigation related settings and config.', 'some-like-it-neat'),
			 )
		 );

		 /**
		 * Adding Panel for Footer Settings and Options
		 */
		 $wp_customize->add_panel(
			 'footer_settings_panel',
			 array(
				 'priority' => 25,
				 'capability' => 'edit_theme_options',
				 'theme_supports' => '',
				 'title' => __('Footer Settings', 'some-like-it-neat'),
				 'description' => __('Settings related to the Footer Section.', 'some-like-it-neat'),
			 )
		);
	}

 }
add_action('customize_register', 'some_like_it_neat_add_panels');
