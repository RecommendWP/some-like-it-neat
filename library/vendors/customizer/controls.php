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
if ( ! function_exists( 'some_like_it_neat_add_controls' ) ) {

	function some_like_it_neat_add_controls( $wp_customize ) {
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, 'some_like_it_neat_add_link_color', array(
				'label'            => __('Body Link Color', 'some-like-it-neat'),
				'section'        => 'colors',
				'settings'        => 'some_like_it_neat_add_link_color',
				'priority'        => 6,
				)
			)
		);

		$wp_customize->add_control(
			'some_like_it_neat_mobile_nav_label',
			array(
			'section'            => 'navigation_section',
			'label'                => __('Mobile Navigation Label', 'some-like-it-neat'),
			'type'                => 'text',
			)
		);

		$dashicons = '<a href="https://developer.wordpress.org/resource/dashicons/#pressthis" title="Dashicons Link" target="_blank">Dashicons Link</a>';
		$wp_customize->add_control(
			'some_like_it_neat_mobile_nav_icon',
			array(
			'section'            => 'navigation_section',
			'label'                => __('Mobile Navigation Icon', 'some-like-it-neat'),
			'type'                => 'text',
			'description'       => __('Dashicons are enabled and you can use them here! ' . $dashicons . '', 'some-like-it-neat'),
			)
		);

		$wp_customize->add_control(
			'some_like_it_neat_mobile_min_width',
			array(
				'section'    => 'navigation_section',
				'label'        => __('Mobile Navigation Min-Width (numeric value)', 'some-like-it-neat'),
				'type'        => 'text',
			)
		);

		$wp_customize->add_control(
			'some_like_it_neat_mobile_hide_arrow',
			array(
				'section'            => 'nav',
				'label'                => __('Mobile Navigation Hide Right Arrow', 'some-like-it-neat'),
				'type'                => 'radio',
				'choices'            => array( 'Yes', 'No' ),
			)
		);

		$wp_customize->add_control(
			'some_like_it_neat_footer_left',
			array(
				'section'    => 'some_like_it_neat_footer_section_settings',
				'label'        => __('Left Footer', 'some-like-it-neat'),
				'type'        => 'text',
			)
		);

		$wp_customize->add_control(
			'some_like_it_neat_footer_right',
			array(
				'section'    => 'some_like_it_neat_footer_section_settings',
				'label'        => __('Right Footer', 'some-like-it-neat'),
				'type'        => 'text',
			)
		);

		$wp_customize->add_control(
			'some_like_it_neat_footer_colophon',
			array(
			'section'        => 'some_like_it_neat_footer_section_settings',
			'label'            => __('Footer Colophon', 'some-like-it-neat'),
			'type'            => 'text',
			'transport'    => 'postMessage',
			)
		);

		$wp_customize->add_control(
			'some-like-it-neat_hide_WordPress_credits',
			array(
				'section'    => 'content_extras',
				'label'        => __('Hide WordPress Credits in Footer?', 'some-like-it-neat'),
				'type'        => 'radio',
				'choices'    => array(
					'yes'    => 'Yes',
					'no'        => 'No'
				)
			)
		);

		$wp_customize->add_control(
			'some-like-it-neat_post_format_support',
			array(
				'section'    => 'content_extras',
				'label'        => __('Enable Post Format support', 'some-like-it-neat'),
				'type'        => 'radio',
				'choices'    => array(
					'yes'    => 'Yes',
					'no'        => 'No'
				)
			)
		);

		$wp_customize->add_control(
			'some-like-it-neat_infinite_scroll_support',
			array(
				'section'  => 'content_extras',
				'label'        => __('Enable Infinite Scroll Theme Support', 'some-like-it-neat'),
				'type'     => 'radio',
				'description' => __('If enabled, you must install the Jetpack Plugin and Activate it.', 'some-like-it-neat'),
					'choices'  => array(
					'no'    => 'No',
					'yes'   => 'Yes'
					)
			)
		);

		$wp_customize->add_control(
			'some-like-it-neat_infinite_scroll_type',
			array(
				'section'    => 'content_extras',
				'label'        => __('Infinite Scroll Type', 'some-like-it-neat'),
				'type'        => 'radio',
				'choices'    => array(
					'scroll'    => 'Scroll',
					'click'        => 'Click'
				)
			)
		);
	}

}
add_action('customize_register', 'some_like_it_neat_add_controls');
