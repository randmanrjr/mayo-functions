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