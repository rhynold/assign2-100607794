<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
*/

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global bool       $is_IE
 * @global WP_Scripts $wp_scripts
 *
 * @return void
 */

function destinations_child_scripts() {
    wp_enqueue_style( 'destinations-child', get_stylesheet_uri(), array('destinations-child-style'), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'destinations_child_scripts' );

define( 'DISALLOW_FILE_EDIT', true ); define( 'DISALLOW_FILE_MODS', true );