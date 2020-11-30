<?php

//featured Images in wp-admin
add_theme_support( 'post-thumbnails' );

//add tags/categories to pages
// function add_categories_to_pages() {
// 	register_taxonomy_for_object_type( 'category', 'page' );
// }
// add_action( 'init', 'add_categories_to_pages' );

// function add_tags_to_pages() {
// 	register_taxonomy_for_object_type( 'post_tag', 'page' );
// }
// add_action( 'init', 'add_tags_to_page');

/*
 * Styles and Js
 */


function sungevity_styles() {
	//styles
	wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
	wp_enqueue_style('font-awesome', get_theme_file_uri('/css/font-awesome.min.css'));
	wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));
	wp_enqueue_style('sunicon', get_theme_file_uri('/css/sunicon.css'));

}


add_action('wp_enqueue_scripts', 'sungevity_styles');

function sungevity_js() {
		//scripts
	wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.5.1.slim.min.js'));
	wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'));
	wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'));
	wp_enqueue_script('step', get_theme_file_uri('/js/step.js'));

	//lazyload background images
	wp_enqueue_script('jquery-lazy', get_theme_file_uri('/js/jquery.lazy.min.js'));
	wp_enqueue_script('jquery-lazy-plugins', get_theme_file_uri('/js/jquery.lazy.plugins.min.js'));
	wp_enqueue_script('fontawesome-kit', get_theme_file_uri('/js/kit.fontawesome.js'));

}
add_action('wp_footer', 'sungevity_js');

//advanced custom fields not showing in admin fix
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

/**
 * Disable the emoji's
 */
// function disable_emojis() {
// 	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// 	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
// 	remove_action( 'wp_print_styles', 'print_emoji_styles' );
// 	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
// 	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
// 	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
// 	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
// 	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
// 	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
// }
// add_action( 'init', 'disable_emojis' );

// function disable_emojis_tinymce( $plugins ) {
// 	if ( is_array( $plugins ) ) {
// 		return array_diff( $plugins, array( 'wpemoji' ) );
// 	} else {
// 		return array();
// 	}
// }

// function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
// 	if ( 'dns-prefetch' == $relation_type ) {
// 		/** This filter is documented in wp-includes/formatting.php */
// 		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

// 		$urls = array_diff( $urls, array( $emoji_svg_url ) );
// 	}

// 	return $urls;
// }

/**
*Remove Extra Wordpress Stuff
**/

// // remove_action('wp_head', 'rest_output_link_wp_head');
// remove_action('wp_head', 'wp_oembed_add_discovery_links');
// remove_action('template_redirect', 'rest_output_link_header', 11 );
// remove_action('wp_head', 'wlwmanifest_link');
// remove_action('wp_head', 'rsd_link');
// remove_action('wp_head', 'wp_shortlink_wp_head');
// remove_action('wp_head', 'feed_links', 2 );
// remove_action('wp_head', 'feed_links_extra', 3 ); 
// remove_action('wp_head', 'wp_generator');