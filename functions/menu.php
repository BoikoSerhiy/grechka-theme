<?php

add_filter('nav_menu_css_class', function ($classes, $items, $args, $depth){
    $newClasses = ['nav-item'];

    if ($args->theme_location === 'menu') {
        $has_child = false;
        /*$has_child_3 = false;*/

        foreach ($classes as $class) {
            if ($class == 'menu-item-has-children') {
                $has_child = true;
            }
            /*if ($class == 'some-other-class') {
                $has_child_3 = true;
            }*/
        }

        $top_level = $depth == '0' & $has_child == true;
        $top_level_i = $depth == '1' & $has_child == true;

        /*$top_level_3 = $has_child_3 == true;*/

        if ($top_level === 1) {
            $top_level = $newClasses[] = 'has-drop-down';
        }

        if ($top_level_i == 1) {
            $top_level_i = $newClasses[] = 'has-drop-down';
        }
    }
    if(in_array('current-menu-item', $classes)){
        $newClasses[] = 'active';
    }
    if(in_array('current-post-parent', $classes)){
        $newClasses[] = 'current-post-parent';
    }

    return $newClasses;
}, 10, 4);

add_filter('nav_menu_item_id', function ($id, $items, $args, $depth){
    return '';
}, 10, 4);

add_action('after_setup_theme', function (){
    register_nav_menu('menu', 'main menu');
    register_nav_menu('header-menu-about', 'header menu about');
    register_nav_menu('footer-menu', 'footer menu');
    register_nav_menu('footer-menu-about', 'footer menu about');
});