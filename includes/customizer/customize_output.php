<style type="text/css">
    .mighty_top {
        background-color:<?php echo mighty_mod_color('top_bar_background'); ?>;
        color:<?php echo mighty_mod_color('topbar_text_color'); ?>;
    }
    .mighty_top .mighty_top_content {
        color:<?php echo mighty_mod_color('topbar_text_color'); ?>;
    }
    .mighty_top a {
        color:<?php echo mighty_mod_color('topbar_link_color'); ?>;
        border-color:<?php echo mighty_mod_color('topbar_link_color'); ?>;
    }
    .mighty_top a:hover {
        color:<?php echo mighty_mod_color('topbar_link_color_hover'); ?>;
        border-color:<?php echo mighty_mod_color('topbar_link_color_hover'); ?>;
    }
    .mighty_top .mighty_social_icons ul li a {
        color:<?php echo mighty_mod_color('mighty_top_bar_social_icons_color'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_top_bar_social_icons_color_bg'); ?>;
        opacity:<?php echo mighty_mod_color('mighty_top_bar_social_icons_color_opacity'); ?>;
    }
    .mighty_top .mighty_social_icons ul li a:hover {
        color:<?php echo mighty_mod_color('mighty_top_bar_social_icons_color_hov'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_top_bar_social_icons_color_bg_hov'); ?>;
        opacity:<?php echo mighty_mod_color('mighty_top_bar_social_icons_color_opacity_hov'); ?>;
    }
    h1.site-title a,
    h2.site-title a {
        color:<?php echo mighty_mod_color('mighty_site_title_color'); ?> !important;
    }
    h1.site-title a:hover,
    h2.site-title a:hover {
        color:<?php echo mighty_mod_color('mighty_site_title_color_hover'); ?> !important;
    }
    ul.mighty_header_navigation > li >  a {
        color:<?php echo mighty_mod_color('mighty_menu_links'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_menu_linksbg'); ?>;
    }
    ul.mighty_header_navigation > li > a:hover,
    ul.mighty_header_navigation > li > a:focus,
    ul.mighty_header_navigation > li > a:active,
    ul.mighty_header_navigation > li:hover > a {
        color:<?php echo mighty_mod_color('mighty_menu_links_hov'); ?>;
        background-color: <?php echo mighty_mod_color('mighty_menu_linksbg_hov'); ?>;
    }
    ul.mighty_header_navigation > li > a:before {
        background-color: <?php echo mighty_mod_color('mighty_menu_links_hov'); ?>;
    }
    ul.mighty_header_navigation li:hover > ul.sub-menu {
        background-color:<?php echo mighty_mod_color('mighty_menu_submenu'); ?>;
    }
    ul.mighty_header_navigation li:hover > ul.sub-menu > li > a {
        color:<?php echo mighty_mod_color('mighty_menu_submenu_li'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_menu_submenu_li_bg'); ?>;
    }
    ul.mighty_header_navigation li:hover > ul.sub-menu > li > a:hover {
        color:<?php echo mighty_mod_color('mighty_menu_submenu_li_hover'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_menu_submenu_li_bg_hover'); ?>;
    }
    ul.mighty_header_navigation li:hover ul.sub-menu > li {
        border-bottom-color: <?php echo mighty_mod_color('mighty_menu_submenu_li_border_color'); ?>;
    }
    ul.mighty_header_navigation .current_page_item > a,
    ul.mighty_header_navigation .current_page_ancestor > a,
    ul.mighty_header_navigation .current-menu-item > a,
    ul.mighty_header_navigation .current-menu-ancestor > a {
        color:<?php echo mighty_mod_color('mighty_menu_submenu_li_active'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_menu_submenu_li_active_bg'); ?>;
    }
    ul.mighty_header_navigation .current_page_item > a:before,
    ul.mighty_header_navigation .current_page_ancestor > a:before,
    ul.mighty_header_navigation .current-menu-item > a:before,
    ul.mighty_header_navigation .current-menu-ancestor > a:before {
        background-color:<?php echo mighty_mod_color('mighty_menu_links_hov'); ?>;
    }
    ul.mighty_header_navigation ul.sub-menu .current_page_item > a,
    ul.mighty_header_navigation ul.sub-menu .current_page_ancestor > a,
    ul.mighty_header_navigation ul.sub-menu .current-menu-item > a,
    ul.mighty_header_navigation ul.sub-menu .current-menu-ancestor > a {
        background-color:<?php echo mighty_mod_color('mighty_menu_submenu__depth2_li_active_bg'); ?> !important;
        color:<?php echo mighty_mod_color('mighty_menu_submenu_depth2_li_active'); ?> !important;
    }
    .mighty_mobile_menu_toggle i {
        color:<?php echo mighty_mod_color('mighty_mobile_menu_icon_color'); ?>;
    }
    .mighty_mobile_menu_toggle i:hover {
        color:<?php echo mighty_mod_color('mighty_mobile_menu_icon_color_hover'); ?>;
    }

    .mighty_mobile_navigation ul li a {
        color:<?php echo mighty_mod_color('mighty_menu_mobile_links'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_menu_mobile_linksbg'); ?>;
        border-color:<?php echo mighty_mod_color('mighty_menu_mobile_border_color'); ?>;
    }
    .mighty_mobile_navigation ul li:first-child,
    .mighty_mobile_navigation ul li
    {
        border-color:<?php echo mighty_mod_color('mighty_menu_mobile_border_color'); ?>;
    }
    .mighty_mobile_navigation ul ul.sub-menu li {
        border-color:<?php echo mighty_mod_color('mighty_menu_mobile_submenu_li_border_color'); ?>;
    }
    .mighty_mobile_navigation ul ul.sub-menu li a {
        color:<?php echo mighty_mod_color('mighty_menu_mobile_submenu_li'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_menu_mobile_submenu_li_bg'); ?>;
    }
    .mighty_mobile_navigation ul .current_page_item > a,
    .mighty_mobile_navigation ul .current_page_ancestor > a,
    .mighty_mobile_navigation ul .current-menu-item > a,
    .mighty_mobile_navigation ul .current-menu-ancestor > a {
        color:<?php echo mighty_mod_color('mighty_menu_mobile_submenu_li_active'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_menu_mobile_submenu_li_active_bg'); ?>;
    }
    .mighty_mobile_navigation ul li a.entered {
        border-color: <?php echo mighty_mod_color('mighty_menu_mobile_expanded_border'); ?>;
    }
    .mighty_mobile_navigation ul ul.sub-menu,
    .mighty_mobile_navigation ul ul ul.sub-menu{
        background-color: <?php echo mighty_mod_color('mighty_menu_mobile_expanded_border'); ?>;
    }
    span.mighty_little_toggle {
        color: <?php echo mighty_mod_color('mighty_menu_mobile_expanded_border'); ?>;
    }

    #mighty_page_header {
        color:<?php echo mighty_mod_color('mighty_pageheader_title_color'); ?>;
        background-color:<?php echo mighty_mod_color('mighty_pageheader_title_bg'); ?>;
    }
    #mighty_page_header h1.mighty_page_title {
        color:<?php echo mighty_mod_color('mighty_pageheader_title_color'); ?>;
    }
    .mighty_breadcrumbs span,
    .mighty_breadcrumbs a,
    .mighty_breadcrumbs a:hover,
    .mighty_breadcrumbs {
        color:<?php echo mighty_mod_color('mighty_pageheader_title_color_breadcrumb'); ?>;
    }

    /*
    ---------------------------------------------------------------
    Layout Color Settings
    ---------------------------------------------------------------
    */
    .mighty_banner_section {
        background-color:<?php echo mighty_mod_color('mighty_banner_section_bg'); ?>;
    }
    .mighty_innerbanner_section {
        background-color:<?php echo mighty_mod_color('mighty_innerbanner_section_bg'); ?>;
    }
    .mighty_twothird_banner_section {
        background-color:<?php echo mighty_mod_color('mighty_twothirdbanner_section_bg'); ?>;
    }
    .mighty_cta_section {
        background-color:<?php echo mighty_mod_color('mighty_cta_section_bg'); ?>;
    }
    .mighty_top_section {
        background-color:<?php echo mighty_mod_color('mighty_top_section_bg'); ?>;
    }
    .mighty_widgets_insettop {
        background-color:<?php echo mighty_mod_color('mighty_insettop_section_bg'); ?>;
    }
    .mighty_insetcontent_section {
        background-color:<?php echo mighty_mod_color('mighty_insetcontent_section_bg'); ?>;
    }
    .mighty_posts,
    .mighty_page_content {
        background-color:<?php echo mighty_mod_color('mighty_content_background'); ?>;
    }
    .mighty_insetfull_section {
        background-color:<?php echo mighty_mod_color('mighty_insetfullwidth_section_bg'); ?>;
    }
    .mighty_widgets_insetbottom {
        background-color:<?php echo mighty_mod_color('mighty_insetbottom_section_bg'); ?>;
    }
    .mighty_bottom_widget {
        background-color:<?php echo mighty_mod_color('mighty_bottom_section_bg'); ?>;
    }

    /*
    ---------------------------------------------------------------
    Typography Color Settings
    ---------------------------------------------------------------
    */
    body {
        font-size: <?php echo mighty_mod_color('body_fontsize'); ?>%;
        background-color:<?php echo mighty_mod_color('bodyback_bg');?>;
    }
    h1,
    h1 a {
        color: <?php echo mighty_mod_color('h1_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('h1_fontsize'); ?>;
    }
    h2,
    h2 a {
        color: <?php echo  mighty_mod_color('h2_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('h2_fontsize'); ?>;
    }
    h3,
    h3 a {
        color: <?php echo mighty_mod_color('h3_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('h3_fontsize'); ?>;
    }
    h4,
    h4 a {
        color: <?php echo  mighty_mod_color('h4_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('h4_fontsize'); ?>;
    }
    h5,
    h5 a {
        color: <?php echo mighty_mod_color('h5_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('h5_fontsize'); ?>;
    }
    h6,
    h6 a {
        color: <?php echo mighty_mod_color('h6_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('h6_fontsize'); ?>;
    }
    p,
    p a {
        color: <?php echo mighty_mod_color('p_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('p_fontsize'); ?>;
    }
    a {
        color: <?php echo mighty_mod_color('a_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('a_fontsize'); ?>;
    }
    a:hover,
    a:focus,
    a:visited {
        color: <?php echo mighty_mod_color('ahover_fontcolor');?>;
    }
    li {
        color: <?php echo mighty_mod_color('li_fontcolor'); ?>;
        font-size: <?php echo mighty_mod_color('li_fontsize'); ?>;
    }
    del {
        color: <?php echo mighty_mod_color('del_color'); ?>;
    }
    ins {
        color: <?php echo mighty_mod_color('ins_color'); ?>;
    }
    dt {
        color: <?php echo mighty_mod_color('dt_color'); ?>;
        border-color: <?php echo mighty_mod_color('dt_color'); ?>;
    }
    dd {
        color: <?php echo mighty_mod_color('dd_color'); ?>;
        border-color: <?php echo mighty_mod_color('dd_color'); ?>;
    }
    .mighty-dropcap {
        color: <?php echo mighty_mod_color('dropcap_color'); ?>;
    }
    code,
    pre {
        color: <?php echo mighty_mod_color('code_color'); ?>;
        background-color: <?php echo mighty_mod_color('code_bg_color'); ?>;
        border-color: <?php echo mighty_mod_color('code_border_color'); ?>;
    }
    mark {
        color: <?php echo mighty_mod_color('mark_color'); ?>;
        background-color: <?php echo mighty_mod_color('mark_bg_color'); ?>;
    }


    .mighty_header_menu {
        background-color: <?php echo mighty_mod_color('mighty_header_menu_background'); ?>;
    }
    body {
        background-color: <?php echo mighty_mod_color('mighty_body_background_color'); ?>;
    }

</style>
