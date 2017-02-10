<?php

if (! function_exists('star_rating')) {
    function star_rating ($atts) {
        $a = shortcode_atts(array(
            'stars' => 0
        ), $atts);

        if ($a['stars'] == 1) { return '<span class="stars">&#xf005; &#xf006; &#xf006; &#xf006; &#xf006;</span>';}
        elseif ($a['stars'] == 2) { return '<span class="stars">&#xf005; &#xf005; &#xf006; &#xf006; &#xf006;</span>';}
        elseif ($a['stars'] == 3) { return '<span class="stars">&#xf005; &#xf005; &#xf005; &#xf006; &#xf006;</span>';}
        elseif ($a['stars'] == 4) { return '<span class="stars">&#xf005; &#xf005; &#xf005; &#xf005; &#xf006;</span>';}
        elseif ($a['stars'] == 5) { return '<span class="stars">&#xf005; &#xf005; &#xf005; &#xf005; &#xf005;</span>';}
        else { return '<span class="stars">&#xf006; &#xf006; &#xf006; &#xf006; &#xf006;</span>';}
    }
}

if (function_exists('star_rating')) {
    add_shortcode('starrating', 'star_rating');
}