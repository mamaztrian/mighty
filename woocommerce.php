<?php
/*
==================================================================================
WooCommerce Template for the Theme
@mainly used for Product Pages or Category Pages of WooCommerce
==================================================================================
*/
get_header();

/*
--------------------------------------------------------------------------------
Get the results for Blog type from theme options
--------------------------------------------------------------------------------
*/

$blog_type = mighty_mod_e_attr('mighty_woocommerce_blog_type', 'blog_with_right');


get_template_part('includes/sidebars/sidebar-banner');
get_template_part('includes/sidebars/sidebar-innerbanner');
get_template_part('includes/sidebars/sidebar-twothirdbanner');
get_template_part('includes/sidebars/sidebar-cta');
get_template_part('includes/sidebars/sidebar-top');
do_action('mighty_display_title');
get_template_part('includes/sidebars/sidebar-inset-top');
get_template_part('includes/sidebars/sidebar-insetcontent');
get_template_part('includes/sidebars/sidebar-insetfull');

/*
--------------------------------------------------------------------------------
Creating the WP Query for Blog Posts
--------------------------------------------------------------------------------
*/
?>
    <div class="mighty_page_content woocommerce">
        <div class="container">
            <div class="row">
                <?php

                if ($blog_type) {
                    switch ($blog_type) {
                        case 'blog_full_width':

                            echo '<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">';

                            woocommerce_content();

                            echo '</div>';

                            break;
                        case 'blog_with_left':
                            echo '<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mighty_sidebars">';
                            get_template_part('includes/sidebars/sidebar-left');
                            echo '</div>';
                            echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">';
                            woocommerce_content();
                            echo '</div>';


                            break;
                        case 'blog_with_right':
                            echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">';
                            woocommerce_content();
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
                            woocommerce_content();
                            echo '</div>';

                            echo '<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 mighty_sidebars">';
                            get_template_part('includes/sidebars/sidebar-right');
                            echo '</div>';
                            break;
                        default:

                            echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">';
                            woocommerce_content();
                            echo '</div>';
                            echo '<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mighty_sidebars">';
                            get_template_part('includes/sidebars/sidebar-left');

                            echo '</div>';

                    }
                } else {
                    echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">';
                    woocommerce_content();
                    echo '</div>';
                    echo '<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 mighty_sidebars">';
                    get_template_part('includes/sidebars/sidebar-left');

                    echo '</div>';
                }

                ?>
            </div>
        </div>
    </div>

<?php
wp_reset_postdata();

get_footer(); ?>