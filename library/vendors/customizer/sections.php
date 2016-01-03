<?php
/**
 * some_like_it_neat Theme Customizer
 *
 * @package some_like_it_neat
 *
 */


/**
* Customizer Some Like it Neat Add Sections
*/
if ( ! function_exists( 'some_like_it_neat_add_sections' ) ) {

	function some_like_it_neat_add_sections( $wp_customize ) {
		/**
		* Adding Section for Footer Area Settings
		*/
		$wp_customize->add_section(
			'some_like_it_neat_footer_section_settings', array(
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __('Footer Area Settings', 'some-like-it-neat'),
			'description' => 'Enter copy for right, left and colophon footer areas',
			'panel' => 'footer_settings_panel',
			)
		);

		/**
		* Adding Section for Navigation Setup
		*/
		$wp_customize->add_section(
			'navigation_section',
			array(
				'priority' => 10,
				'capability' => 'edit_theme_options',
				'theme_supports' => '',
				'title' => __('Navigation Setup', 'some-like-it-neat'),
				'description' => '',
				'panel' => 'navigation_panel',
			)
		);

		/**
		* Adding Section for Content Extras
		*/
		$wp_customize->add_section(
			'content_extras',
			array(
				'priority' => 0,
				'capability' => 'edit_theme_options',
				'theme_supports' => '',
				'title' => __('Content Extras', 'some-like-it-neat'),
				'description' => '',
				'panel' => 'site_content',
			)
		);
	}
}
add_action('customize_register', 'some_like_it_neat_add_sections');
