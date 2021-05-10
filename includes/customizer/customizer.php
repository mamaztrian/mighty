<?php
/*
=================================================
MIGHTY THEME CUSTOMIZER
=================================================
*/

add_action('customize_register', 'mighty_theme_customizer');

function mighty_theme_customizer($wp_customize)
{
    //$wp_customize->remove_section('colors');


    function mighty_customize_register($wp_customize)
    {
        $wp_customize->get_setting('blogname')->transport = 'postMessage';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    }

    add_action('customize_register', 'mighty_customize_register');


    function mighty_customize_preview_js()
    {
        wp_enqueue_script('mighty_customizer', get_template_directory_uri() . '/js/mighty-customizer.js', array('customize-preview'), '20131012', true);
    }

    add_action('customize_preview_init', 'mighty_customize_preview_js');

    /*
    ---------------------------------------------------------------
    Header Top Bar Settings
    Upto Link No: 221
    ---------------------------------------------------------------
    */

    $wp_customize->add_section('header_top_settings', array(
        'title' => esc_html__('Top Bar Settings', 'mighty'),
        'description' => esc_html__('Header Top Represents the top position ahead of Menu', 'mighty'),
        'priority' => 26,
        'priority' => 2,
        'panel' => 'mighty_header',
    ));

    $wp_customize->add_setting('enable_top_bar', array(
        'default' => '1',
        'sanitize_callback' => 'mighty_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_top_bar', array(
        'label' => esc_html__('Enable Top Bar', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'enable_top_bar',
        'priority' => 1,
        'type' => 'checkbox',
    ));

    $wp_customize->add_setting('top_bar_left_content', array(
            'default' => '',
            'sanitize_callback' => 'mighty_sanitize_html',
    ));

    $wp_customize->add_control('top_bar_left_content', array(
        'label' => esc_html__('Top Bar Content', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'top_bar_left_content',
        'priority' => 1,
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('mighty_top_right_selection', array(
        'default' => 'mighty_top_none',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_control('mighty_top_right_selection', array(
        'label' => esc_html__('Modules on Right Side', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'mighty_top_right_selection',
        'priority' => 1,
        'type' => 'select',
        'choices' => array(
            'mighty_top_social_icons' => __('Social icons', 'mighty'),
            'mighty_top_navigation_menu' => __('Navigation Menu', 'mighty'),
            'mighty_top_none' => __('Nothing, Just enlarge the Left Content', 'mighty'),
        ),
    ));

    $wp_customize->add_setting('top_bar_background', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'top_bar_background', array(
        'label' => esc_html__('Top Bar Background', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'top_bar_background',
        'priority' => 5,
    )));

    $wp_customize->add_setting('topbar_text_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topbar_text_color', array(
        'label' => esc_html__('Top Bar Text Color', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'topbar_text_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('topbar_link_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topbar_link_color', array(
        'label' => esc_html__('Top Bar Link Color', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'topbar_link_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('topbar_link_color_hover', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topbar_link_color_hover', array(
        'label' => esc_html__('Top Bar Link Color Hover', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'topbar_link_color_hover',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_top_bar_social_icons_color_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_top_bar_social_icons_color_bg', array(
        'label' => esc_html__('Top Bar Social Icon Background', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'mighty_top_bar_social_icons_color_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_top_bar_social_icons_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_top_bar_social_icons_color', array(
        'label' => esc_html__('Top Bar Social Icon Color', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'mighty_top_bar_social_icons_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_top_bar_social_icons_color_bg_hov', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_top_bar_social_icons_color_bg_hov', array(
        'label' => esc_html__('Top Bar Social Icon Background [Hover]', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'mighty_top_bar_social_icons_color_bg_hov',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_top_bar_social_icons_color_hov', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_top_bar_social_icons_color_hov', array(
        'label' => esc_html__('Top Bar Social Icon Color [Hover]', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'mighty_top_bar_social_icons_color_hov',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_top_bar_social_icons_color_opacity', array(
        'default' => '0.75',
        'sanitize_callback' => 'mighty_sanitize_text',
    ));

    $wp_customize->add_control('mighty_top_bar_social_icons_color_opacity', array(
        'label' => esc_html__('Top Bar Social Icon Opacity', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'mighty_top_bar_social_icons_color_opacity',
        'priority' => 8,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_top_bar_social_icons_color_opacity_hov', array(
        'default' => '1',
        'sanitize_callback' => 'mighty_sanitize_text',
    ));

    $wp_customize->add_control('mighty_top_bar_social_icons_color_opacity_hov', array(
        'label' => esc_html__('Top Bar Social Icon Opacity', 'mighty'),
        'section' => 'header_top_settings',
        'settings' => 'mighty_top_bar_social_icons_color_opacity_hov',
        'priority' => 8,
        'type' => 'text',
    ));


    /*
    ---------------------------------------------------------------
    Social Networking Settings
    Upto Line No: 478
    ---------------------------------------------------------------
    */

    $wp_customize->add_panel('mighty_social_icons', array(
        'priority' => 31,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Social Icons', 'mighty'),
        'description' => esc_html__('Enter the social icons lists & Colors', 'mighty'),
    ));

    $wp_customize->add_section('mighty_social_links', array(
        'title' => esc_html__('Links', 'mighty'),
        'description' => esc_html__('Links of Social Icons', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_social_icons',
    ));

    $wp_customize->add_setting('mighty_facebook', array(
        'default' => 'http://facebook.com',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_facebook', array(
        'label' => esc_html__('Facebook URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_facebook',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_twitter', array(
        'default' => 'http://twitter.com',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_twitter', array(
        'label' => esc_html__('Twitter URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_twitter',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_google', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_google', array(
        'label' => esc_html__('Google URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_google',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_linkedin', array(
        'label' => esc_html__('Linkedin URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_linkedin',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_pinterest', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_pinterest', array(
        'label' => esc_html__('Pinterest URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_pinterest',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_flickr', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_flickr', array(
        'label' => esc_html__('Flicker URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_flickr',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_youtube', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_youtube', array(
        'label' => esc_html__('Youtube URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_youtube',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_vimeo', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_vimeo', array(
        'label' => esc_html__('Vimeo URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_vimeo',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_instagram', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_instagram', array(
        'label' => esc_html__('Instagram URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_instagram',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_stumbleupon', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_stumbleupon', array(
        'label' => esc_html__('StumbleUpon URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_stumbleupon',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_wordpress', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_wordpress', array(
        'label' => esc_html__('WordPress URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_wordpress',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_dribble', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_dribble', array(
        'label' => esc_html__('Dribble URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_dribble',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_tumblr', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_tumblr', array(
        'label' => esc_html__('Tumblr URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_tumblr',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_rss', array(
        'default' => '',
        'sanitize_callback' => 'mighty_sanitize_url',
    ));

    $wp_customize->add_control('mighty_rss', array(
        'label' => esc_html__('RSS URL', 'mighty'),
        'section' => 'mighty_social_links',
        'settings' => 'mighty_rss',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_section('mighty_social_colors', array(
        'title' => esc_html__('Color', 'mighty'),
        'description' => esc_html__('Color Settings', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_social_icons',
    ));

    $wp_customize->add_setting('mighty_social_icons_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_social_icons_color', array(
        'label' => esc_html__('Social Icon Background', 'mighty'),
        'section' => 'mighty_social_colors',
        'settings' => 'mighty_social_icons_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_social_icons_color_hov', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_social_icons_color_hov', array(
        'label' => esc_html__('Social Icon Color', 'mighty'),
        'section' => 'mighty_social_colors',
        'settings' => 'mighty_social_icons_color_hov',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_social_icons_color_bg_hov', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_social_icons_color_bg_hov', array(
        'label' => esc_html__('Social Icon Background [Hover]', 'mighty'),
        'section' => 'mighty_social_colors',
        'settings' => 'mighty_social_icons_color_bg_hov',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_social_icons_color_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_social_icons_color_bg', array(
        'label' => esc_html__('Social Icon Color [Hover]', 'mighty'),
        'section' => 'mighty_social_colors',
        'settings' => 'mighty_social_icons_color_bg',
        'priority' => 5,
    )));

    /*
    ---------------------------------------------------------------
    Add some customizer options to title tagline
    ---------------------------------------------------------------
    */
    $wp_customize->add_setting('mighty_site_title_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_site_title_color', array(
        'label' => esc_html__('Mighty Site Title Color', 'mighty'),
        'section' => 'title_tagline',
        'settings' => 'mighty_site_title_color',
        'priority' => 10,
    )));

    $wp_customize->add_setting('mighty_site_title_color_hover', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_site_title_color_hover', array(
        'label' => esc_html__('Mighty Site Title Hover Color', 'mighty'),
        'section' => 'title_tagline',
        'settings' => 'mighty_site_title_color_hover',
        'priority' => 11,
    )));

    /*
    ---------------------------------------------------------------
    Header Settings
    ---------------------------------------------------------------
    */
    $wp_customize->add_panel('mighty_header', array(
        'priority' => 27,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Header Settings', 'mighty'),
        'description' => esc_html__('Settings for the Header Part', 'mighty'),
    ));

    $wp_customize->add_section('mighty_header_site_title', array(
        'title' => esc_html__('Site Title Colors', 'mighty'),
        'description' => esc_html__('Colors Settings for Site Title', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_header',
    ));


    $wp_customize->add_section('mighty_header_navigation', array(
        'title' => esc_html__('Navigation Colors', 'mighty'),
        'description' => esc_html__('Colors Settings for the Navigation', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_header',
    ));

    $wp_customize->add_setting('mighty_menu_links', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_links', array(
        'label' => esc_html__('Navigation Links Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_links',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_links_hov', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_links_hov', array(
        'label' => esc_html__('Navigation Links Hover Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_links_hov',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_linksbg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_linksbg', array(
        'label' => esc_html__('Navigation Links Background Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_linksbg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_linksbg_hov', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_linksbg_hov', array(
        'label' => esc_html__('Navigation Links Background Hover Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_linksbg_hov',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu', array(
        'label' => esc_html__('Navigation Links Submenu Background', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu_li', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu_li', array(
        'label' => esc_html__('Navigation Links Submenu Link Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu_li',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu_li_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu_li_bg', array(
        'label' => esc_html__('Navigation Links Submenu Link Background Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu_li_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu_li_hover', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu_li_hover', array(
        'label' => esc_html__('Navigation Links Submenu Link Hover Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu_li_hover',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu_li_bg_hover', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu_li_bg_hover', array(
        'label' => esc_html__('Navigation Links Submenu Link Background Hover Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu_li_bg_hover',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu_li_active', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu_li_active', array(
        'label' => esc_html__('Navigation Top Links Active Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu_li_active',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu_li_active_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu_li_active_bg', array(
        'label' => esc_html__('Navigation Top Links Active Background Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu_li_active_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu_depth2_li_active', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu_depth2_li_active', array(
        'label' => esc_html__('Navigation Submenu Links Active Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu_depth2_li_active',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_submenu__depth2_li_active_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_submenu__depth2_li_active_bg', array(
        'label' => esc_html__('Navigation Top Submenu Active Background Color', 'mighty'),
        'section' => 'mighty_header_navigation',
        'settings' => 'mighty_menu_submenu__depth2_li_active_bg',
        'priority' => 5,
    )));

    $wp_customize->add_section('mobile_header_navigation', array(
        'title' => esc_html__('Mobile Header Navigation', 'mighty'),
        'description' => esc_html__('Color Settings for Mobile Menu', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_header',
    ));

    $wp_customize->add_setting('mighty_mobile_menu_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_mobile_menu_icon_color', array(
        'label' => esc_html__('Mobile Menu Icon Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_mobile_menu_icon_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_mobile_menu_icon_color_hover', array(
    'default' => '',
    'sanitize_callback' => 'mighty_hex_color',
));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_mobile_menu_icon_color_hover', array(
        'label' => esc_html__('Mobile Menu Icon Color Hover', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_mobile_menu_icon_color_hover',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_links', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_links', array(
        'label' => esc_html__('Navigation Links Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_links',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_linksbg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_linksbg', array(
        'label' => esc_html__('Navigation Links Background Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_linksbg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_border_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_border_color', array(
        'label' => esc_html__('Navigation Links Border Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_border_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_submenu', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_submenu', array(
        'label' => esc_html__('Navigation Links Submenu Background', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_submenu',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_submenu_li', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_submenu_li', array(
        'label' => esc_html__('Navigation Links Submenu Link Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_submenu_li',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_submenu_li_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_submenu_li_bg', array(
        'label' => esc_html__('Navigation Links Submenu Link Background Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_submenu_li_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_submenu_li_border_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_submenu_li_border_color', array(
        'label' => esc_html__('Navigation Links Submenu Link Border Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_submenu_li_border_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_submenu_li_active', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_submenu_li_active', array(
        'label' => esc_html__('Navigation Links Active Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_submenu_li_active',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_submenu_li_active_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_submenu_li_active_bg', array(
        'label' => esc_html__('Navigation Links Active Background Color', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_submenu_li_active_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_menu_mobile_expanded_border', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_menu_mobile_expanded_border', array(
        'label' => esc_html__('Navigation Links Active Expanded', 'mighty'),
        'section' => 'mobile_header_navigation',
        'settings' => 'mighty_menu_mobile_expanded_border',
        'priority' => 5,
    )));

    $wp_customize->add_panel('mighty_blog_settings', array(
        'priority' => 28,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Blog Settings', 'mighty'),
        'description' => esc_html__('Settings for the Blog Section', 'mighty'),
    ));

    $wp_customize->add_section('mighty_general_settings', array(
        'title' => esc_html__('Title & BreadCrumb Settings', 'mighty'),
        'priority' => 3,
        'panel' => 'mighty_blog_settings',
    ));

    $wp_customize->add_setting('mighty_blog_page_title', array(
        'default' => esc_html__('Blog', 'mighty'),
        'sanitize_callback' => 'mighty_sanitize_text',
    ));

    $wp_customize->add_control('mighty_blog_page_title', array(
        'label' => esc_html__('Blog Title', 'mighty'),
        'section' => 'mighty_general_settings',
        'settings' => 'mighty_blog_page_title',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_blog_page_title_enable', array(
        'default' => '1',
        'sanitize_callback' => 'mighty_sanitize_checkbox',
    ));

    $wp_customize->add_control('mighty_blog_page_title_enable', array(
        'label' => esc_html__('Enable Blog Title', 'mighty'),
        'section' => 'mighty_general_settings',
        'settings' => 'mighty_blog_page_title_enable',
        'priority' => 1,
        'type' => 'checkbox',
    ));

        $wp_customize->add_section('mighty_blog_excerpt_settings', array(
        'title' => esc_html__('Excerpt Settings', 'mighty'),
        'description' => esc_html__('Settings for Excerpts', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_blog_settings',
    ));

    $wp_customize->add_setting('mighty_blog_posts_excerpt', array(
        'default' => 'excerpt',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_control('mighty_blog_posts_excerpt', array(
        'label' => esc_html__('Content Type: Full Content or Excerpt', 'mighty'),
        'section' => 'mighty_blog_excerpt_settings',
        'settings' => 'mighty_blog_posts_excerpt',
        'type' => 'radio',
        'choices' => array(
            'content' => esc_html__('Content', 'mighty'),
            'excerpt' => esc_html__('Excerpt', 'mighty'),

        ),
        'priority' => 1,
    ));

    $wp_customize->add_setting('mighty_blog_posts_excerpt_count', array(
        'default' => '50',
        'sanitize_callback' => 'mighty_sanitize_text',
    ));

    $wp_customize->add_control('mighty_blog_posts_excerpt_count', array(
        'label' => esc_html__('Excerpt Word Count', 'mighty'),
        'section' => 'mighty_blog_excerpt_settings',
        'settings' => 'mighty_blog_posts_excerpt_count',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_blog_posts_excerpt_read_more_text', array(
        'default' => esc_html__('Read More', 'mighty'),
        'sanitize_callback' => 'mighty_sanitize_text',
    ));

    $wp_customize->add_control('mighty_blog_posts_excerpt_read_more_text', array(
        'label' => esc_html__('Excerpt Read More Text', 'mighty'),
        'section' => 'mighty_blog_excerpt_settings',
        'settings' => 'mighty_blog_posts_excerpt_read_more_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_blog_posts_excerpt_btn_style', array(
        'default' => 'default',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_section('mighty_blog_layout', array(
        'title' => esc_html__('Blog Layout', 'mighty'),
        'description' => esc_html__('Layout Settings for Blog', 'mighty'),
        'priority' => 4,
        'panel' => 'mighty_blog_settings',
    ));

    $wp_customize->add_setting('mighty_blog_type', array(
        'default' => 'blog_with_right',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_control('mighty_blog_type', array(
        'label' => esc_html__('Blog Type', 'mighty'),
        'section' => 'mighty_blog_layout',
        'settings' => 'mighty_blog_type',
        'type' => 'radio',
        'choices' => array(
            'blog_full_width' => esc_html__('Full width blog', 'mighty'),
            'blog_with_left' => esc_html__('Blog With left Sidebar', 'mighty'),
            'blog_with_right' => esc_html__('Blog With right Sidebar', 'mighty'),
            'blog_with_leftright' => esc_html__('Blog With left & right Sidebar', 'mighty'),

        ),
        'priority' => 1,
    ));

    /*
    ---------------------------------------------------------------
    Color Sections
    ---------------------------------------------------------------
    */

    $wp_customize->add_panel('mighty_colors', array(
        'priority' => 29,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Color Settings', 'mighty'),
        'description' => esc_html__('Set the Color Options for the Theme', 'mighty'),
    ));

    $wp_customize->add_section('mighty_header_colors', array(
        'title' => esc_html__('Header Colors', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_colors',
    ));

    $wp_customize->add_setting('mighty_pageheader_title_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_pageheader_title_bg', array(
        'label' => esc_html__('Title Background Color', 'mighty'),
        'section' => 'mighty_header_colors',
        'settings' => 'mighty_pageheader_title_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_pageheader_title_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_pageheader_title_color', array(
        'label' => esc_html__('Title Colors', 'mighty'),
        'section' => 'mighty_header_colors',
        'settings' => 'mighty_pageheader_title_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_pageheader_title_color_breadcrumb', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_pageheader_title_color_breadcrumb', array(
        'label' => esc_html__('Breadcrumb Color', 'mighty'),
        'section' => 'mighty_header_colors',
        'settings' => 'mighty_pageheader_title_color_breadcrumb',
        'priority' => 5,
    )));


    $wp_customize->add_section('mighty_layout_colors', array(
        'title' => esc_html__('Section Color', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_colors',
    ));

    $wp_customize->add_setting('mighty_content_background', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_content_background', array(
        'label' => esc_html__('Body Background Color', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_content_background',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_banner_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_banner_section_bg', array(
        'label' => esc_html__('Banner Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_banner_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_innerbanner_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_innerbanner_section_bg', array(
        'label' => esc_html__('Inner Banner Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_innerbanner_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_twothirdbanner_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_twothirdbanner_section_bg', array(
        'label' => esc_html__('Two Third Banner Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_twothirdbanner_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_cta_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_cta_section_bg', array(
        'label' => esc_html__('CTA Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_cta_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_top_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_top_section_bg', array(
        'label' => esc_html__('Top Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_top_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_insettop_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_insettop_section_bg', array(
        'label' => esc_html__('InsetTop Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_insettop_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_insetcontent_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_insetcontent_section_bg', array(
        'label' => esc_html__('InsetContent Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_insetcontent_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_insetfullwidth_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_insetfullwidth_section_bg', array(
        'label' => esc_html__('InsetFull Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_insetfullwidth_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_insetbottom_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_insetbottom_section_bg', array(
        'label' => esc_html__('InsetBottom Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_insetbottom_section_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_bottom_section_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_bottom_section_bg', array(
        'label' => esc_html__('Bottom Widgets Background', 'mighty'),
        'section' => 'mighty_layout_colors',
        'settings' => 'mighty_bottom_section_bg',
        'priority' => 5,
    )));


    $wp_customize->get_section( 'background_image' )->panel = 'mighty_colors';
    $wp_customize->get_section( 'header_image' )->panel = 'mighty_header';

    $wp_customize->add_setting('mighty_header_menu_background', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_header_menu_background', array(
        'label' => esc_html__('Mighty Header Color', 'mighty'),
        'section' => 'header_image',
        'settings' => 'mighty_header_menu_background',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_body_background_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_body_background_color', array(
        'label' => esc_html__('Mighty Body Background', 'mighty'),
        'section' => 'background_image',
        'settings' => 'mighty_body_background_color',
        'priority' => 5,
    )));

    /*
    ---------------------------------------------------------------
    WooCommerce Settings
    ---------------------------------------------------------------
    */

    $wp_customize->add_section('mighty_woocommerce_general_settings', array(
        'title' => esc_html__('[Mighty] General Settings', 'mighty'),
        'priority' => 5,
        'panel' => 'woocommerce',
    ));

    $wp_customize->add_setting('mighty_woocommerce_page_title', array(
        'default' => esc_html__('Shop','mighty'),
        'sanitize_callback' => 'mighty_sanitize_text',
    ));

    $wp_customize->add_control('mighty_woocommerce_page_title', array(
        'label' => esc_html__('WooCommerce Page Title', 'mighty'),
        'section' => 'mighty_woocommerce_general_settings',
        'settings' => 'mighty_woocommerce_page_title',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_woocommerce_blog_type', array(
        'default' => 'blog_with_right',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_control('mighty_woocommerce_blog_type', array(
        'label' => esc_html__('WooCommerce Blog Layout', 'mighty'),
        'section' => 'mighty_woocommerce_general_settings',
        'settings' => 'mighty_woocommerce_blog_type',
        'type' => 'radio',
        'choices' => array(
            'blog_full_width' => esc_html__('Full width WooCommerce page', 'mighty'),
            'blog_with_left' => esc_html__('WooCommerce page With left Sidebar', 'mighty'),
            'blog_with_right' => esc_html__('WooCommerce page with right Sidebar', 'mighty'),
            'blog_with_leftright' => esc_html__('WooCommerce page with left & right Sidebar', 'mighty'),

        ),
        'priority' => 1,
    ));

    $wp_customize->add_section('mighty_woocommerce_header_color_settings', array(
        'title' => esc_html__('[Mighty] Header color Settings', 'mighty'),
        'priority' => 5,
        'panel' => 'woocommerce',
    ));

    $wp_customize->add_setting('mighty_woocommerce_title_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_woocommerce_title_color', array(
        'label' => esc_html__('Title Color', 'mighty'),
        'section' => 'mighty_woocommerce_header_color_settings',
        'settings' => 'mighty_woocommerce_title_color',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_woocommerce_title_bg', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_woocommerce_title_bg', array(
        'label' => esc_html__('Title Background', 'mighty'),
        'section' => 'mighty_woocommerce_header_color_settings',
        'settings' => 'mighty_woocommerce_title_bg',
        'priority' => 5,
    )));

    $wp_customize->add_setting('mighty_woocommerce_breadcrumb_color', array(
        'default' => '',
        'sanitize_callback' => 'mighty_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mighty_woocommerce_breadcrumb_color', array(
        'label' => esc_html__('BreadCrumb', 'mighty'),
        'section' => 'mighty_woocommerce_header_color_settings',
        'settings' => 'mighty_woocommerce_breadcrumb_color',
        'priority' => 5,
    )));

    $wp_customize->add_section('mighty_woocommerce_btn_settings', array(
        'title' => esc_html__('[Mighty] Button Settings', 'mighty'),
        'priority' => 5,
        'panel' => 'woocommerce',
    ));

    $wp_customize->add_setting('mighty_woocommerce_btn_style', array(
        'default' => 'default',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_control('mighty_woocommerce_btn_style', array(
        'label' => esc_html__('WooCommerce Button Style', 'mighty'),
        'section' => 'mighty_woocommerce_btn_settings',
        'settings' => 'mighty_woocommerce_btn_style',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default', 'mighty'),
            'mighty_radius' => esc_html__('Mighty Radius', 'mighty'),
            'mighty_flat_border' => esc_html__('Flat Border', 'mighty'),
            'mighty_radius_border' => esc_html__('Flat Radius Border', 'mighty'),
            'mighty_flat_dotted' => esc_html__('Flat Dotted', 'mighty'),
            'mighty_flat_radius_dotted' => esc_html__('Flat Dotted Radius', 'mighty'),
            'mighty_simple' => esc_html__('Mighty Simple', 'mighty'),

        ),
        'priority' => 1,
    ));

    $wp_customize->add_setting('mighty_woocommerce_btn_color', array(
        'default' => 'default',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_control('mighty_woocommerce_btn_color', array(
        'label' => esc_html__('WooCommerce Button Color', 'mighty'),
        'section' => 'mighty_woocommerce_btn_settings',
        'settings' => 'mighty_woocommerce_btn_color',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default', 'mighty'),
            'primary' => esc_html__('Primary', 'mighty'),
            'success' => esc_html__('Success', 'mighty'),
            'info' => esc_html__('Info', 'mighty'),
            'warning' => esc_html__('Warning', 'mighty'),
            'danger' => esc_html__('Danger', 'mighty'),
        ),
        'priority' => 1,
    ));

    $wp_customize->add_setting('mighty_woocommerce_btn_size', array(
        'default' => 'btn',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_control('mighty_woocommerce_btn_size', array(
        'label' => esc_html__('WooCommerce Button size', 'mighty'),
        'section' => 'mighty_woocommerce_btn_settings',
        'settings' => 'mighty_woocommerce_btn_size',
        'type' => 'select',
        'choices' => array(
            'btn' => esc_html__('Normal', 'mighty'),
            'btn-sm' => esc_html__('Small', 'mighty'),
            'btn-lg' => esc_html__('Large', 'mighty'),
            'btn-block' => esc_html__('Block', 'mighty'),
        ),
        'priority' => 1,
    ));

    /*
    ---------------------------------------------------------------
    Footer Settings
    Upto Line No:
    ---------------------------------------------------------------
    */
    $wp_customize->add_panel('mighty_footer', array(
        'priority' => 31,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Footer Settings', 'mighty'),
        'description' => esc_html__('Settings for the Footer', 'mighty'),
    ));

    $wp_customize->add_section('mighty_footer_general', array(
        'title' => esc_html__('General', 'mighty'),
        'priority' => 5,
        'panel' => 'mighty_footer',
    ));

    $wp_customize->add_setting('enable_copyright_text', array(
        'default' => '1',
        'sanitize_callback' => 'mighty_sanitize_text',
    ));

    $wp_customize->add_control('enable_copyright_text', array(
        'label' => esc_html__('Enable Custom Copyright', 'mighty'),
        'section' => 'mighty_footer_general',
        'settings' => 'enable_copyright_text',
        'priority' => 1,
        'type' => 'checkbox',
    ));

    $wp_customize->add_setting('mighty_copyright_text', array(
        'default' => esc_html__('Mighty', 'mighty'),
        'sanitize_callback' => 'mighty_sanitize_text',
    ));

    $wp_customize->add_control('mighty_copyright_text', array(
        'label' => esc_html__('Copyright Text', 'mighty'),
        'section' => 'mighty_footer_general',
        'settings' => 'mighty_copyright_text',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('mighty_footer_right', array(
        'default' => 'mighty_footer_center',
        'sanitize_callback' => 'mighty_sanitize_select',
    ));

    $wp_customize->add_control('mighty_footer_right', array(
        'label' => esc_html__('Display Modules on Right Side', 'mighty'),
        'section' => 'mighty_footer_general',
        'settings' => 'mighty_footer_right',
        'type' => 'select',
        'choices' => array(
            'mighty_footer_navigation_menu' => __('Navigation Menu', 'mighty'),
            'mighty_footer_social_icons' => __('Social icons', 'mighty'),
            'mighty_footer_center' => __('Nothing, Center the Copyright Text', 'mighty'),

        ),
        'priority' => 1,
    ));

}

function mighty_sanitize_text( $input ) {
    return sanitize_text_field( $input );
}

function mighty_sanitize_html( $html ) {
    return wp_kses_post( $html );
}

function mighty_sanitize_url( $value) {
    $value = esc_url_raw($value);
    return $value;
}

function mighty_sanitize_image( $image, $setting ) {
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    $file = wp_check_filetype( $image, $mimes );
    return ( $file['ext'] ? $image : $setting->default );
}

function mighty_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function mighty_sanitize_number( $number, $setting ) {
    $number = absint( $number );
    return ( $number ? $number : $setting->default );
}

function mighty_sanitize_select( $input, $setting ) {
    $input = sanitize_key( $input );
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function mighty_hex_color( $value ) {
    $hex_color = sanitize_hex_color( $value );
    return ( ! is_null( $hex_color ) ? $hex_color : $setting->default );
}

function mighty_sanitize_css( $css ) {
    return wp_strip_all_tags( $css );
}

function mighty_sanitize_email( $email, $setting ) {
    $email = sanitize_email( $email );
    return ( ! is_null( $email ) ? $email : $setting->default );
}

add_filter( 'mighty_sanitize_image', 'mighty_sanitize_upload' );
add_filter( 'mighty_sanitize_file', 'mighty_sanitize_upload' );
function mighty_sanitize_upload( $input ) {

    $output = '';

    $filetype = wp_check_filetype($input);

    if ( $filetype["ext"] ) {

        $output = $input;

    }

    return $output;

}