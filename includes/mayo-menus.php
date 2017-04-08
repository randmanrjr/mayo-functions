<?php

/** Menus **/

//create Main Nav menu if it does not exist
$main_menu = 'Main Nav';
$main_menu_exists = wp_get_nav_menu_object($main_menu);

if (! $main_menu_exists) {
    wp_create_nav_menu($main_menu);
}

//Additional menu locations
add_action( 'init', 'register_my_menu' );

if (! function_exists('register_my_menu')) {
    function register_my_menu () {
        register_nav_menus(array(
            'footer-nav' => __('Footer Navigation')
        ));
    }
}