<?php
/**
 *
 * Functions for removing stuff & cleaning up theme
 *
 */

/*---------------------------------------------------
*                  Theme Cleanup                    -
 --------------------------------------------------*/

/** remove embeds **/
function roots_disable_embeds_init() {
	// Remove the REST API endpoint.
	remove_action('rest_api_init', 'wp_oembed_register_route');
	// Turn off oEmbed auto discovery.
	// Don't filter oEmbed results.
	remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
	// Remove oEmbed discovery links.
	remove_action('wp_head', 'wp_oembed_add_discovery_links');
	// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'roots_disable_embeds_init', 9999);


/** disable contactform 7 css & js **/
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


/** disable emojicons */
function disable_wp_emojicons() {
	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	// filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/** Remove Query String from Static Resources **/
function remove_cssjs_ver( $src ) {
	$src = remove_query_arg( array('v', 'ver', 'rev'), $src );
	return esc_url($src);
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

/**
 *
 * Removes class hentry
 * Adds class entry
 *
 * @param $classes
 * @param $class
 * @param $post_id
 * @return array
 */
function filter_post_class($classes, $class, $post_id) {
	$classes[] = 'entry';
	$classes = array_filter($classes, function($class_name){
		// use !== 0 to ensure we match hentry at begining of string
		return strpos($class_name, 'hentry') !== 0;
	});

	return $classes;
}

add_filter('post_class', 'filter_post_class', 10, 3);