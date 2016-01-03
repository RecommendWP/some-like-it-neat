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
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function some_like_it_neat_customize_register( $wp_customize ) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	// Remove Default Sections, Settings and Controls
	$wp_customize->remove_section('nav');

	// Changing panels for default Customizer settings
	$wp_customize->get_section('static_front_page')->panel = 'site_content';
	$wp_customize->get_section('colors')->panel = 'color_panel';
	$wp_customize->get_section('title_tagline')->panel = 'site_content';
	$wp_customize->get_section('background_image')->panel = 'site_content';
}
add_action('customize_register', 'some_like_it_neat_customize_register');
