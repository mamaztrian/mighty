<?php
/**
 *
Template Name: Page Full Width
 *
 * Description: A page template without the left or right columns
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
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile; endif;

get_footer();
?>