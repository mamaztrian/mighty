<?php
get_header();

/*
--------------------------------------------------------------------------------
Get the results for Blog type from theme options
--------------------------------------------------------------------------------
*/

$blog_type = mighty_mod_e_attr('mighty_blog_type', 'blog_with_right');


mighty_sidebars_render(['sidebar-banner', 'sidebar-cta', 'sidebar-top']);

do_action('mighty_display_title');


/*
--------------------------------------------------------------------------------
Creating the WP Query for Blog Posts
--------------------------------------------------------------------------------
*/
?>
    <div class="mighty_posts">
        <div class="container">
            <div class="row">
                <?php

                if ($blog_type) {
                    switch ($blog_type) {
                        case 'blog_full_width':

                            echo '<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">';

                            if (have_posts()) : while (have_posts()) : the_post();
                                get_template_part('includes/content-templates/content', get_post_format());
                            endwhile;
                                mighty_blog_post_pagination($paged);
                            else :
                                get_template_part('includes/content-templates/content', 'none');
                            endif;
                            echo '</div>';

                            break;
                        case 'blog_with_left':
                            echo '<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mighty_sidebars">';
                            get_template_part('includes/sidebars/sidebar-left');
                            echo '</div>';
                            echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">';
                            if (have_posts()) : while (have_posts()) : the_post();
                                get_template_part('includes/content-templates/content', get_post_format());
                            endwhile;
                                mighty_blog_post_pagination($paged);
                            else :
                                get_template_part('includes/content-templates/content', 'none');
                            endif;
                            echo '</div>';


                            break;
                        case 'blog_with_right':
                            echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">';
                            if (have_posts()) : while (have_posts()) : the_post();
                                get_template_part('includes/content-templates/content', get_post_format());
                            endwhile;
                                mighty_blog_post_pagination($paged);
                            else :
                                get_template_part('includes/content-templates/content', 'none');
                            endif;
                            echo '</div>';
                            echo '<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mighty_sidebars">';
                            get_template_part('includes/sidebars/sidebar-right');

                            echo '</div>';

                            break;
                        case 'blog_with_leftright':
                            echo '<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 mighty_sidebars">';
                            get_template_part('includes/sidebars/sidebar-left');
                            echo '</div>';
                            echo '<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">';
                            if (have_posts()) : while (have_posts()) : the_post();
                                get_template_part('includes/content-templates/content', get_post_format());
                            endwhile;
                                mighty_blog_post_pagination($paged);
                            else :
                                get_template_part('includes/content-templates/content', 'none');
                            endif;
                            mighty_blog_post_pagination_fnc($blog_post_count, $total, $paged);
                            echo '</div>';

                            echo '<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 mighty_sidebars">';
                            get_template_part('includes/sidebars/sidebar-right');
                            echo '</div>';
                            break;
                        default:

                            echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">';
                            if (have_posts()) : while (have_posts()) : the_post();
                                get_template_part('includes/content-templates/content', get_post_format());
                            endwhile;
                                mighty_blog_post_pagination($paged);
                            else :
                                get_template_part('content', 'none');
                            endif;
                            mighty_blog_post_pagination_fnc($blog_post_count, $total, $paged);
                            echo '</div>';
                            echo '<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mighty_sidebars">';
                            get_template_part('includes/sidebars/sidebar-left');

                            echo '</div>';

                    }
                } else {
                    echo '<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">';
                    if (have_posts()) : while (have_posts()) : the_post();
                        get_template_part('includes/content-templates/content', get_post_format());
                    endwhile;
                        mighty_blog_post_pagination($paged);
                    else :
                        get_template_part('content', 'none');
                    endif;
                    mighty_blog_post_pagination_fnc($blog_post_count, $total, $paged);
                    echo '</div>';
                }

                ?>
            </div>
        </div>
    </div>

<?php
wp_reset_postdata();

get_footer(); ?>