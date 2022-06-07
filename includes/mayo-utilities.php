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
        $insta = get_theme_mod('social_instagram');
        $tw = get_theme_mod('social_twitter');
        $lin = get_theme_mod('social_linkedin');
        $gplus = get_theme_mod('social_google_plus');
        $pin = get_theme_mod('social_pinterest');
        $yt = get_theme_mod('social_youtube');

        if ($fb || $insta || $tw || $lin || $gplus || $pin) :
            if ($li) { echo '<li>'; }
        echo '<ul class="social-icons">';
        if (!empty($fb)) {
            ($sq ? $fa_fb = 'fa-facebook-square' : $fa_fb = 'fa-facebook');
            echo '<li><a href="' . $fb . '" target="_blank"><i class="fa ' . $fa_fb . '"></i></a>';
        }
        if (!empty($insta)) {
	        ($fa_insta = 'fa-instagram');
	        echo '<li><a href="' . $insta . '" target="_blank"><i class="fa ' . $fa_insta . '"></i></a>';
        }
        if (!empty($tw)) {
            ($sq ? $fa_tw = 'fa-twitter-square' : $fa_tw = 'fa-twitter');
            echo '<li><a href="' . $tw . '" target="_blank"><i class="fa ' . $fa_tw . '"></i></a>';
        }
        if (!empty($lin)) {
            ($sq ? $fa_lin = 'fa-linkedin-square' : $fa_lin = 'fa-linkedin');
            echo '<li><a href="' . $lin . '" target="_blank"><i class="fa ' . $fa_lin . '"></i></a>';
        }
        if (!empty($gplus)) {
            ($sq ? $fa_gplus = 'fa-google' : $fa_gplus = 'fa-google');
            echo '<li><a href="' . $gplus . '" target="_blank"><i class="fa ' . $fa_gplus . '"></i></a>';
        }
        if (!empty($yt)) {
            ($sq ? $fa_yt = 'fa-youtube-square' : $fa_yt = 'fa-youtube');
            echo '<li><a href="' . $yt . '" target="_blank"><i class="fa ' . $fa_yt . '"></i></a>';
        }
        if (!empty($pin)) {
            ($sq ? $fa_pin = 'fa-pinterest-square' : $fa_pin = 'fa-pinterest');
            echo '<li><a href="' . $pin . '" target="_blank"><i class="fa ' . $fa_pin . '"></i></a>';
        }
        echo '</ul>';
            if ($li) { echo '</li>'; }
        endif;
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
