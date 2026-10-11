<?php
/**
 * Perera Mortgages theme setup.
 *
 * @package Perera_Mortgages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function perera_mortgages_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 320,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_editor_style( 'style.css' );
	register_nav_menus( array(
		'primary' => __( 'Primary navigation', 'perera-mortgages' ),
	) );
}
add_action( 'after_setup_theme', 'perera_mortgages_setup' );

function perera_mortgages_enqueue_styles() {
	wp_enqueue_style(
		'perera-mortgages-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'perera_mortgages_enqueue_styles' );

function perera_mortgages_register_pattern_category() {
	register_block_pattern_category(
		'perera-mortgages',
		array( 'label' => __( 'Perera Mortgages', 'perera-mortgages' ) )
	);
}
add_action( 'init', 'perera_mortgages_register_pattern_category' );
