<?php
/**
 *
Template Name: Page with left & right sidebar
 *
 * Description: A page template with the left or right columns
 * @package Mighty
 * @since 1.0.0
 */

get_header();

mighty_sidebars_render('sidebar-banner');

if (have_posts()) : while (have_posts()) : the_post();
    do_action('mighty_display_title', $post->ID);
    mighty_sidebars_render(['sidebar-cta', 'sidebar-top']);
    ?>
    <div class="mighty_page_content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 mighty_sidebars">
                    <?php get_template_part( 'includes/sidebars/sidebar-left' ); ?>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <?php the_content(); ?>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 mighty_sidebars">
                    <?php get_template_part( 'includes/sidebars/sidebar-right' ); ?>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile; endif;

get_footer();
?>