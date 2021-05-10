<?php
/**
 *
Template Name: Page With left Sidebar
 *
 * Description: A page template with left sidebar only
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
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mighty_sidebars">
                    <?php get_template_part( 'includes/sidebars/sidebar-left' ); ?>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile; endif;

get_footer();
?>