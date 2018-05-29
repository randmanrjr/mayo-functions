<?php

/** Menus **/

//create Primary Menu if it does not exist
$main_menu = 'Primary Menu';
$main_menu_exists = wp_get_nav_menu_object($main_menu);

if (! $main_menu_exists) {
    wp_create_nav_menu($main_menu);
}

//Additional menu locations
add_action( 'init', 'register_mayo_menus' );

if (! function_exists('register_mayo_menus')) {
    function register_mayo_menus () {
        register_nav_menus(array(
        	'secondary' => __('Secondary Menu'),
            'footer-nav' => __('Footer Navigation')
        ));
    }
}