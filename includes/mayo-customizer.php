<?php
/**
 * Created by PhpStorm.
 * User: randallrodrigues
 * Date: 7/29/16
 * Time: 8:23 AM
 */

if (! function_exists( 'mayo_theme_customizer' ) ):
    function mayo_theme_customizer( $wp_customize ) {
        //Create custom section for logo upload
        $wp_customize->add_section( 'main_site_logo', array(
                'priority'          => 2000,
                'title'             => __( 'Site logo', 'foundationpress' ),
                'description'       => __( 'Upload the site logo', 'foundationpress' )
            )
        );

        //setting for main logo
        $wp_customize->add_setting('main_logo');

        //Add option to upload main site logo
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'main_logo', array(
                    'label'             => __('Main Site Logo', 'foundationpress'),
                    'section'           => 'main_site_logo',
                    'settings'          => 'main_logo'
                )
            )
        );

        //Create custom section for site background image
        $wp_customize->add_section('site_background_image', array(
                'priority'          => 2001,
                'title'             => __('Site Background', 'foundationpress'),
                'description'       => __('Upload a background image for the site', 'foundationpress')
            )
        );

        //setting for site background image
        $wp_customize->add_setting('background_image');

        //Add option to upload the main background image
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_image', array(
                    'label'             => __('Main site backgound image', 'foundationpress'),
                    'section'           => 'site_background_image',
                    'settings'          => 'background_image'
                )
            )
        );

        //create panel for Mayo Foundationpress
        $wp_customize->add_panel('mayo_foundationpress_options', array(
            'priority'          => 2002,
            'title'             => __('Mayo Designs Theme Options', 'foundationpress'),
            'description'       => __('Options for Mayo Designs', 'foundationpress')
        ));

	    //Create Custom section for theme colors
	    $wp_customize->add_section('theme_colors', array(
		    'priority'          => 1002,
		    'panel'             => 'mayo_foundationpress_options',
		    'title'             => __('Theme Colors', 'foundationpress'),
		    'description'       => __('Primary and Secondary colors', 'foundationpress')
	    ));

	    //Create Custom section for Social Media Accounts
	    $wp_customize->add_section('social_media', array(
		    'priority'          => 1003,
		    'panel'             => 'mayo_foundationpress_options',
		    'title'             => __('Social Media', 'foundationpress'),
		    'description'       => __('Social Media Accounts', 'foundationpress')
	    ));

        //Create Custom section for Company Information
        $wp_customize->add_section('company_info', array(
            'priority'          => 1004,
            'panel'             => 'mayo_foundationpress_options',
            'title'             => __('Company Information', 'foundationpress'),
            'description'       => __('Edit Company Information', 'foundationpress')
        ));

        //Create Custom section for Company Information
        $wp_customize->add_section('company_address', array(
            'priority'          => 1005,
            'panel'             => 'mayo_foundationpress_options',
            'title'             => __('Company Address', 'foundationpress'),
            'description'       => __('Edit Company Address', 'foundationpress')
        ));

        //Create Custom section for Company Information
        $wp_customize->add_section('mailing_address', array(
            'priority'          => 1006,
            'panel'             => 'mayo_foundationpress_options',
            'title'             => __('Mailing Address', 'foundationpress'),
            'description'       => __('Edit Mailing Address', 'foundationpress')
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
		    	'label'         => __('Primary Color', 'foundationpress'),
			    'section'       => 'theme_colors',
			    'settings'      => 'primary_color'
		    )
	    ));
	    $wp_customize->add_control(new WP_Customize_Color_Control(
		    $wp_customize,
		    'secondary_color',
		    array(
			    'label'         => __('Secondary Color', 'foundationpress'),
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

		//social media controls
	    $wp_customize->add_control(new Mayo_Social_Media_Customizer_Control($wp_customize, 'social_facebook', array(
		    'label'             => __('Facebook', 'foundationpress'),
		    'section'           => 'social_media',
		    'settings'          => 'social_facebook',
            'fa_string'         => 'fa fa-facebook'
	    )));
	    $wp_customize->add_control(new Mayo_Social_Media_Customizer_Control($wp_customize, 'social_twitter', array(
		    'label'             => __('Twitter', 'foundationpress'),
		    'section'           => 'social_media',
		    'settings'          => 'social_twitter',
            'fa_string'         => 'fa fa-twitter'
	    )));
	    $wp_customize->add_control(new Mayo_Social_Media_Customizer_Control($wp_customize, 'social_linkedin', array(
		    'label'             => __('Linkedin', 'foundationpress'),
		    'section'           => 'social_media',
		    'settings'          => 'social_linkedin',
            'fa_string'         => 'fa fa-linkedin'
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
            'label'             => __('Street:', 'foundationpress'),
            'section'           => 'company_address',
            'settings'          => 'company_street'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_city', array(
            'label'             => __('City:', 'foundationpress'),
            'section'           => 'company_address',
            'settings'          => 'company_city'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_state', array(
            'label'             => __('State:', 'foundationpress'),
            'section'           => 'company_address',
            'settings'          => 'company_state'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_zip', array(
            'label'             => __('ZIP code:', 'foundationpress'),
            'section'           => 'company_address',
            'settings'          => 'company_zip'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mailing_street', array(
            'label'             => __('Street:', 'foundationpress'),
            'section'           => 'mailing_address',
            'settings'          => 'mailing_street'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mailing_city', array(
            'label'             => __('City:', 'foundationpress'),
            'section'           => 'mailing_address',
            'settings'          => 'mailing_city'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mailing_state', array(
            'label'             => __('State:', 'foundationpress'),
            'section'           => 'mailing_address',
            'settings'          => 'mailing_state'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mailing_zip', array(
            'label'             => __('Zip code:', 'foundationpress'),
            'section'           => 'mailing_address',
            'settings'          => 'mailing_zip'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_phone_num', array(
            'label'             => __('Portsmouth Phone Number:', 'foundationpress'),
            'section'           => 'company_info',
            'settings'          => 'company_phone_num_port'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_800_num', array(
            'label'             => __('Company 1-800 Phone Number:', 'foundationpress'),
            'section'           => 'company_info',
            'settings'          => 'company_800_num'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'company_fax_num', array(
            'label'             => __('Company Fax Number:', 'foundationpress'),
            'section'           => 'company_info',
            'settings'          => 'company_fax_num'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sales_email', array(
            'label'             => __('Sales email address:', 'foundationpress'),
            'section'           => 'company_info',
            'settings'          => 'sales_email'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'info_email', array(
            'label'             => __('Info email address:', 'foundationpress'),
            'section'           => 'company_info',
            'settings'          => 'info_email'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'office_hours', array(
            'label'             => __('Office Hours:', 'foundationpress'),
            'section'           => 'company_info',
            'settings'          => 'office_hours'
        )));


    }
endif;

add_action('customize_register','mayo_theme_customizer');
