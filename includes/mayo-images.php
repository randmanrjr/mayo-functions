<?php
/**
 * Created by PhpStorm.
 * User: randman
 * Date: 5/29/18
 * Time: 8:40 AM
 */

//additional image sizes
// Banner images 3:1 ratio
add_image_size('bootstrap_small_banner', 540, 135, array('center','top'));
add_image_size('bootstrap_medium_banner', 720, 180, array('center','top'));
add_image_size('bootstrap_large_banner', 960, 240, array('center','top'));
add_image_size('bootstrap_x-large_banner', 1140, 285, array('center','top'));
add_image_size('bootstrap_x-large_fluid_banner', 1920, 480, array('center','top'));

// Square images center cropped
add_image_size('bootstrap_small_square', 540, 540, true);
add_image_size('bootstrap_medium_square', 720, 720, true);
add_image_size('bootstrap_large_square', 960, 960, true);



