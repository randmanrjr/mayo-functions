<?php
/**
 * Created by PhpStorm.
 * User: randallrodrigues
 * Date: 7/29/16
 * Time: 8:23 AM
 */

add_action('customize_register','mayo_theme_customizer');

if (! function_exists( 'mayo_theme_customizer' ) ):
    function mayo_theme_customizer( $wp_customize ) {

	    $current_theme = wp_get_theme();
	    if ($current_theme->exists()) {
		    $text_domain = $current_theme->get('TextDomain');
	    } else {
		    $text_domain = 'default';
	    }

        //Create custom section for logo upload
        $wp_customize->add_section( 'main_site_logo', array(
                'priority'          => 1000,
                'panel'             => 'mayo_foundationpress_options',
                'title'             => __( 'Site logo', $text_domain ),
                'description'       => __( 'Upload the site logo', $text_domain )
            )
        );

        //setting for main logo
        $wp_customize->add_setting('main_logo');

        //Add option to upload main site logo
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'main_logo', array(
                    'label'             => __('Main Site Logo', $text_domain),
                    'section'           => 'main_site_logo',
                    'settings'          => 'main_logo'
                )
            )
        );

        //Create custom section for site background image
        $wp_customize->add_section('site_background_image', array(
                'priority'          => 1001,
                'panel'             => 'mayo_foundationpress_options',
                'title'             => __('Site Background', $text_domain),
                'description'       => __('Upload a background image for the site', $text_domain)
            )
        );

        //setting for site background image
        $wp_customize->add_setting('main_background_image');

        //Add option to upload the main background image
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'main_background_image', array(
                    'label'             => __('Main site backgound image', $text_domain),
                    'section'           => 'site_background_image',
                    'settings'          => 'main_background_image'
                )
            )
        );

        //create panel for Mayo Foundationpress
        $wp_customize->add_panel('mayo_foundationpress_options', array(
            'priority'          => 2002,
            'title'             => __('Mayo Designs Theme Options', $text_domain),
            'description'       => __('Options for Mayo Designs', $text_domain)
        ));

	    //Create Custom section for theme colors
	    $wp_customize->add_section('theme_colors', array(
		    'priority'          => 1002,
		    'panel'             => 'mayo_foundationpress_options',
		    'title'             => __('Theme Colors', $text_domain),
		    'description'       => __('Primary and Secondary colors', $text_domain)
	    ));

	    //Create Custom section for Social Media Accounts
	    $wp_customize->add_section('social_media', array(
		    'priority'          => 1003,
		    'panel'             => 'mayo_foundationpress_options',
		    'title'             => __('Social Media', $text_domain),
		    'description'       => __('Social Media Accounts', $text_domain)
	    ));

        //Create Custom section for Company Information
        $wp_customize->add_section('company_info', array(
            'priority'          => 1004,
            'panel'             => 'mayo_foundationpress_options',
            'title'             => __('Company Information', $text_domain),
            'description'       => __('Edit Company Information', $text_domain)
        ));

        //Create Custom section for Company Information
        $wp_customize->add_section('company_address', array(
            'priority'          => 1005,
            'panel'             => 'mayo_foundationpress_options',
            'title'             => __('Company Address', $text_domain),
            'description'       => __('Edit Company Address', $text_domain)
        ));

        //Create Custom section for Company Information
        $wp_customize->add_section('mailing_address', array(
            'priority'          => 1006,
            'panel'             => 'mayo_foundationpress_options',
            'title'             => __('Mailing Address', $text_domain),
            'description'       => __('Edit Mailing Address', $text_domain)
        ));

        //settings for theme colors
	    $wp_customize->add_setting('primary_color', array(
		    'type'          => 'theme_mod',
		    'capability'    => 'edit_theme_options',
		    'sanitize'      => 'sanitize_hex_color'
	    ));

	    $wp_customize->add_setting('secondary_color', array(
		    'type'          => 'theme_mod',
		    'capability'    => 'edit_theme_options',
		    'sanitize'      => 'sanitize_hex_color'
	    ));

	    //controls for theme colors
	    $wp_customize->add_control(new WP_Customize_Color_Control(
	    	$wp_customize,
		    'primary_color',
		    array(
		    	'label'         => __('Primary Color', $text_domain),
			    'section'       => 'theme_colors',
			    'settings'      => 'primary_color'
		    )
	    ));
	    $wp_customize->add_control(new WP_Customize_Color_Control(
		    $wp_customize,
		    'secondary_color',
		    array(
			    'label'         => __('Secondary Color', $text_domain),
			    'section'       => 'theme_colors',
			    'settings'      => 'secondary_color'
		    )
	    ));

        //settings for Social Media Accounts
	    $wp_customize->add_setting('social_facebook', array(
	    	'type'          => 'theme_mod',
		    'capability'    => 'edit_theme_options',
		    'sanitize'      => 'esc_url'
	    ));
	    $wp_customize->add_setting('social_instagram', array(
		    'type'          => 'theme_mod',
		    'capability'    => 'edit_theme_options',
		    'sanitize'      => 'esc_url'
	    ));
	    $wp_customize->add_setting('social_twitter', array(
		    'type'          => 'theme_mod',
		    'capability'    => 'edit_theme_options',
		    'sanitize'      => 'esc_url'
	    ));
	    $wp_customize->add_setting('social_linkedin', array(
		    'type'          => 'theme_mod',
		    'capability'    => 'edit_theme_options',
		    'sanitize'      => 'esc_url'
	    ));
        $wp_customize->add_setting('social_google_plus', array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'sanitize'      => 'esc_url'
        ));
        $wp_customize->add_setting('social_pinterest', array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'sanitize'      => 'esc_url'
        ));
        $wp_customize->add_setting('social_youtube', array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'sanitize'      => 'esc_url'
        ));

		//social media controls
	    $wp_customize->add_control(new MAYO_Social_Media_Customize_Control($wp_customize, 'social_facebook', array(
		    'label'             => __('Facebook', $text_domain),
		    'section'           => 'social_media',
		    'settings'          => 'social_facebook',
            'fa_string'         => 'fa fa-facebook-square'
	    )));
	    $wp_customize->add_control(new MAYO_Social_Media_Customize_Control($wp_customize, 'social_instagram', array(
		    'label'             => __('Instagram', $text_domain),
		    'section'           => 'social_media',
		    'settings'          => 'social_instagram',
		    'fa_string'         => 'fa fa-instagram'
	    )));
	    $wp_customize->add_control(new MAYO_Social_Media_Customize_Control($wp_customize, 'social_twitter', array(
		    'label'             => __('Twitter', $text_domain),
		    'section'           => 'social_media',
		    'settings'          => 'social_twitter',
            'fa_string'         => 'fa fa-twitter-square'
	    )));
	    $wp_customize->add_control(new MAYO_Social_Media_Customize_Control($wp_customize, 'social_linkedin', array(
		    'label'             => __('Linkedin', $text_domain),
		    'section'           => 'social_media',
		    'settings'          => 'social_linkedin',
            'fa_string'         => 'fa fa-linkedin-square'
	    )));
        $wp_customize->add_control(new MAYO_Social_Media_Customize_Control($wp_customize, 'social_google_plus', array(
            'label'             => __('Google', $text_domain),
            'section'           => 'social_media',
            'settings'          => 'social_google_plus',
            'fa_string'         => 'fa fa-google'
        )));
        $wp_customize->add_control(new MAYO_Social_Media_Customize_Control($wp_customize, 'social_pinterest', array(
            'label'             => __('Pinterest', $text_domain),
            'section'           => 'social_media',
            'settings'          => 'social_pinterest',
            'fa_string'         => 'fa fa-pinterest-square'
        )));
        $wp_customize->add_control(new MAYO_Social_Media_Customize_Control($wp_customize, 'social_youtube', array(
            'label'             => __('Youtube', $text_domain),
            'section'           => 'social_media',
            'settings'          => 'social_youtube',
            'fa_string'         => 'fa fa-youtube-square'
        )));

        //settings for Company Information
        $wp_customize->add_setting('company_street');
        $wp_customize->add_setting('company_city');
        $wp_customize->add_setting('company_state');
        $wp_customize->add_setting('company_zip');
        $wp_customize->add_setting('mailing_street');
        $wp_customize->add_setting('mailing_city');
        $wp_customize->add_setting('mailing_state');
        $wp_customize->add_setting('mailing_zip');
        $wp_customize->add_setting('company_phone_num');
        $wp_customize->add_setting('company_800_num');
        $wp_customize->add_setting('company_fax_num');
        $wp_customize->add_setting('sales_email');
        $wp_customize->add_setting('info_email');
        $wp_customize->add_setting('office_hours');

		//company info controls
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_street', array(
            'label'             => __('Street:', $text_domain),
            'section'           => 'company_address',
            'settings'          => 'company_street'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_city', array(
            'label'             => __('City:', $text_domain),
            'section'           => 'company_address',
            'settings'          => 'company_city'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_state', array(
            'label'             => __('State:', $text_domain),
            'section'           => 'company_address',
            'settings'          => 'company_state'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_zip', array(
            'label'             => __('ZIP code:', $text_domain),
            'section'           => 'company_address',
            'settings'          => 'company_zip'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mailing_street', array(
            'label'             => __('Street:', $text_domain),
            'section'           => 'mailing_address',
            'settings'          => 'mailing_street'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mailing_city', array(
            'label'             => __('City:', $text_domain),
            'section'           => 'mailing_address',
            'settings'          => 'mailing_city'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mailing_state', array(
            'label'             => __('State:', $text_domain),
            'section'           => 'mailing_address',
            'settings'          => 'mailing_state'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mailing_zip', array(
            'label'             => __('Zip code:', $text_domain),
            'section'           => 'mailing_address',
            'settings'          => 'mailing_zip'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_phone_num', array(
            'label'             => __('Company Phone Number:', $text_domain),
            'section'           => 'company_info',
            'settings'          => 'company_phone_num'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_800_num', array(
            'label'             => __('Company 1-800 Phone Number:', $text_domain),
            'section'           => 'company_info',
            'settings'          => 'company_800_num'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_fax_num', array(
            'label'             => __('Company Fax Number:', $text_domain),
            'section'           => 'company_info',
            'settings'          => 'company_fax_num'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sales_email', array(
            'label'             => __('Sales email address:', $text_domain),
            'section'           => 'company_info',
            'settings'          => 'sales_email'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'info_email', array(
            'label'             => __('Info email address:', $text_domain),
            'section'           => 'company_info',
            'settings'          => 'info_email'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'office_hours', array(
            'label'             => __('Office Hours:', $text_domain),
            'section'           => 'company_info',
            'settings'          => 'office_hours'
        )));


    }
endif;
