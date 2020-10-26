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

if ( ! function_exists('mayo_button_shortcode')) {
    function mayo_button_shortcode($atts, $content = null) {
        // Extract shortcode attributes
        extract( shortcode_atts( array(
            'url'    => '',
            'class'  => '',
            'title'  => '',
            'target' => '',
            'text'   => '',
        ), $atts ) );

        // Use text value for items without content
        $content = $text ? $text : $content;

        // Return button with link
        if ( $url ) {

            $link_attr = array(
                'href'   => esc_url( $url ),
                'class'  => ('' == $class) ? 'btn btn-primary' : $class,
                'title'  => esc_attr( $title ),
                'target' => ( 'blank' == $target ) ? '_blank' : '',
            );

            $link_attrs_str = '';

            foreach ( $link_attr as $key => $val ) {

                if ( $val ) {

                    $link_attrs_str .= ' ' . $key . '="' . $val . '"';

                }

            }


            return '<a' . $link_attrs_str . '><span>' . do_shortcode( $content ) . '</span></a>';

        }

        // No link defined so return button as a span
        else {

            $span_class = ('' == $class) ? 'btn btn-primary' : $class;
            return '<span class="'.$span_class.'"><span>' . do_shortcode( $content ) . '</span></span>';

        }
    }
}

if (function_exists('mayo_button_shortcode')) {
    add_shortcode('mayo_button','mayo_button_shortcode');
}