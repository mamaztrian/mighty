<?php
/**
 *
Template Name: Page Widgets Only
 *
 * Description: A page template without the widgets only
 * @package Mighty
 * @since 1.0.0
 */

get_header();
mighty_sidebars_render('sidebar-banner');
if (have_posts()) : while (have_posts()) : the_post();
    do_action('mighty_display_title');
endwhile; endif;
mighty_sidebars_render(['sidebar-cta', 'sidebar-top']);
get_footer();
?>