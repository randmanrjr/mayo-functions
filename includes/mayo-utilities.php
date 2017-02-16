<?php

if ( ! function_exists('mayo_get_full_address')) {

    function mayo_get_full_address () {

        $company_street = sanitize_text_field(get_theme_mod('company_street'));
        $company_city   = sanitize_text_field(get_theme_mod('company_city'));
        $company_state  = sanitize_text_field(get_theme_mod('company_state'));
        $company_zip    = sanitize_text_field(get_theme_mod('company_zip'));
        $company_full_address = null;

        if ($company_street && $company_city && $company_state && $company_zip) {
            $company_full_address = $company_street . ' ' . $company_city . ' ' . $company_state . ' ' . $company_zip;
            return $company_full_address;
        } else {
            return null;
        }
    }
}

if ( ! function_exists('mayo_get_social_media_icon_list')) {

    // Params
    // $sq boolean square fa icons
    // $li boolean wrap in <li>

    function mayo_get_social_media_icon_list ($sq = true, $li = false) {

        $fb = get_theme_mod('social_facebook');
        $tw = get_theme_mod('social_twitter');
        $lin = get_theme_mod('social_linkedin');

        if ($fb || $tw || $lin) :
            if ($li) { echo '<li>'; }
        echo '<ul class="social-icons">';
        if (!empty($fb)) {
            ($sq ? $fa_fb = 'fa-facebook-square' : $fa_fb = 'fa-facebook');
            echo '<li><a href="' . $fb . '" target="_blank"><i class="fa ' . $fa_fb . '"></i></a>';
        }
        if (!empty($tw)) {
            ($sq ? $fa_tw = 'fa-twitter-square' : $fa_tw = 'fa-twitter');
            echo '<li><a href="' . $tw . '" target="_blank"><i class="fa ' . $fa_tw . '"></i></a>';
        }
        if (!empty($lin)) {
            ($sq ? $fa_lin = 'fa-linkedin-square' : $fa_lin = 'fa-linkedin');
            echo '<li><a href="' . $lin . '" target="_blank"><i class="fa ' . $fa_lin . '"></i></a>';
        }
        echo '</ul>';
            if ($li) { echo '</li>'; }
        endif;
    }

}