<?php

/**
 * Mayo Theme Functions
 */

//Theme customizer configuration
require_once ('includes/classes/Mayo.class.customizer.php');
require_once ('includes/mayo-customizer.php');

//custom shortcodes
require_once ('includes/mayo-shortcodes.php');

//utility functions
require_once ( 'includes/mayo-utilities.php' );

//menus
require_once ( 'includes/mayo-menus.php');

//images
require_once ('includes/mayo-images.php');

// Adding excerpt for pages
add_post_type_support( 'page', 'excerpt' );