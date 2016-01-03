<?php
/**
 * some_like_it_neat Theme Customizer
 *
 * @package some_like_it_neat
 *
 */


 /**
  * Customizer Some Like it Neat Add Settings
  */

  if ( ! function_exists( 'some_like_it_neat_add_settings' ) ) {

	function some_like_it_neat_add_settings( $wp_customize ) {
		$wp_customize->add_setting(
			'some_like_it_neat_add_link_color',
			array(
				'default'            => '#000000',
				'sanitize_callback'     => 'some_like_it_neat_sanitize_hex_color',
			)
		);

		// Mobile nav label
		$wp_customize->add_setting(
			'some_like_it_neat_mobile_nav_label',
			array(
				'default'            => 'Menu',
				'sanitize_callback' => 'some_like_it_neat_sanitize_text',
			)
		);

		// Mobile Nav Min Width
		$wp_customize->add_setting(
			'some_like_it_neat_mobile_min_width',
			array(
				'default'            => '768',
				'sanitize_callback'    => 'absint',
			)
		);

		// Mobile Nav Icon Text
		$wp_customize->add_setting(
			'some_like_it_neat_mobile_nav_icon',
			array(
				'default'            => 'dashicons-menu',
				'sanitize_callback' => 'some_like_it_neat_sanitize_nohtml',
			)
		);

		// Mobile Settings
		$wp_customize->add_setting(
			'some_like_it_neat_mobile_hide_arrow',
			array(
				'default'        => 'No',
				'sanitize_callback'    => 'some_like_it_neat_sanitize_checkbox',
			)
		);
		$wp_customize->add_setting(
			'some_like_it_neat_footer_left',
			array(
				'sanitize_callback'    => 'some_like_it_neat_sanitize_text',
				'default'            => '&copy; All Rights Reserved',
			)
		);
		$wp_customize->add_setting(
			'some_like_it_neat_footer_right',
			array(
				'default'            => 'Footer Content Right',
				'sanitize_callback'    => 'some_like_it_neat_sanitize_text',
			)
		);
		$wp_customize->add_setting(
			'some_like_it_neat_footer_colophon',
			array(
				'default'            => 'Some Like it Neat, by Alex Vasquez',
				'sanitize_callback'    => 'some_like_it_neat_sanitize_text',
			)
		);
		/**
			* Hide or Show WordPress Credits
			*/
		$wp_customize->add_setting(
			'some-like-it-neat_hide_WordPress_credits',
			array(
				'default'   => 'no'
			)
		);

		/**
			* Enable/Disable Post Format support
			* @link http://codex.wordpress.org/Post_Formats
			*/
		$wp_customize->add_setting(
			'some-like-it-neat_post_format_support',
			array(
				'default'   => 'yes',
				'transport' => 'postMessage'
			)
		);

		/**
			* Enable/Disable Infinite Scroll support
			* @uses Jetpack
			* @link http://downloads.wordpress.org/plugin/jetpack.latest-stable.zip
			*/
		$wp_customize->add_setting(
			'some-like-it-neat_infinite_scroll_support',
			array(
				'default'   => 'no',
				'transport' => 'postMessage'
			)
		);

		// Set the type of Infinite Scroll
		$wp_customize->add_setting(
			'some-like-it-neat_infinite_scroll_type',
			array(
				'default'   => 'scroll',
				'transport' => 'postMessage'
			)
		);
		}

}
add_action('customize_register', 'some_like_it_neat_add_settings');
