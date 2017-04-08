<?php

/**
 * Mayo Theme Functions
 */

//Theme customizer configuration
require_once ('includes/classes/Mayo.class.customizer.php');
require_once ('includes/mayo-customizer.php');

//custom meta boxes
require_once ('includes/mayo-meta-boxes.php');

//custom shortcodes
require_once ('includes/mayo-shortcodes.php');

//utility functions
require_once ( 'includes/mayo-utilities.php' );

//menus
require_once ( 'includes/mayo-menus.php');

//additional image sizes
add_image_size('double_thumb', 300, 300, true);


add_action('sidebar_nav','sidebar_nav');

//insert sidebar navigation
if (! function_exists('sidebar_nav')) {
    function sidebar_nav () {
        get_template_part('template-parts/sidebar-nav');
    }
}

//check for child pages
if (! function_exists('post_have_children')) {
    function post_have_children($id){
        $children = get_pages('child_of='.$id);
        if(count($children) == 0){
            return false;
        }
        else{
            return true;
        }
    }
}

