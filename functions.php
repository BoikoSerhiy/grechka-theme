<?php
require_once 'inc/Popular_Post_Data.php';
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
//remove_theme_support( 'core-block-patterns' );
//include( get_template_directory() . '/functions/remove-rubbish.php');
include( get_template_directory() . '/functions/menu.php');


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
/*
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );
*/

if(function_exists('wpp_get_views')){
    add_filter( "manage_post_posts_columns", function ( $columns ) {

        $columns['views'] = 'Перегляди';

        return $columns;
    } );
    add_action( "manage_post_posts_custom_column", function ( $column_name, $post_id ) {

        if ( $column_name == 'views' ) {
            echo wpp_get_views($post_id);
        }
    }, 10, 2 );
}
