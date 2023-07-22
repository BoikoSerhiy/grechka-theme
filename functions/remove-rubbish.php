<?php

function remove_jquery() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
	}
}
add_action('wp_enqueue_scripts', 'remove_jquery');

function wpschool_disable_scripts_styles() {
	wp_dequeue_style( 'uagb-block-css' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'wp-block-library' );
	/*wp_dequeue_style( 'wpusb-style' );*/
	wp_dequeue_style( 'jquery-lazyloadxt-fadein-css' );
	wp_dequeue_style( 'cookie-notice-front' );
	wp_dequeue_style( 'contact-form-7' );
}
add_action( 'wp_enqueue_scripts', 'wpschool_disable_scripts_styles', 99 );

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

remove_action('wp_head', 'rest_output_link_wp_head', 10);

remove_action( 'wp_head', 'rel_canonical' );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

remove_action( 'wp_head',      'wp_oembed_add_discovery_links' );

remove_action( 'wp_head', 'wp_generator' );

remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

remove_action('wp_head', 'wlwmanifest_link');

remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link

remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version