<?php 
/*
===============================================
Mighty 404 Page Custom Templates
===============================================
*/
get_header();

/*
--------------------------------------------------------------------------------
Check if custom 404 content is defined in the theme options
--------------------------------------------------------------------------------
*/

$notfound_page_content = mighty_mod('mighty_not_found_content', '<h3>Oops! That page can\'t be found. </h3>It looks like nothing was found at this location. Maybe try a search?');
$notfound_page_content = esc_html($notfound_page_content);

/*
--------------------------------------------------------------------------------
Check if left sidebar is enabled in theme options
--------------------------------------------------------------------------------
*/

$mighty_notfound_layout = mighty_mod_e_attr('mighty_404_type');


mighty_sidebars_render('sidebar-banner');

do_action('mighty_display_title');

mighty_sidebars_render(['sidebar-cta', 'sidebar-top']);

/*
--------------------------------------------------------------------------------
Creating the WP Query for 404 page
--------------------------------------------------------------------------------
*/
if ($mighty_notfound_layout) {
    switch ($mighty_notfound_layout) {
        case 'blog_with_leftright':
            ?>
            <div class="mighty_page_content not_found">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <?php get_template_part('includes/sidebars/sidebar-left'); ?>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="mighty_notfound_content">
                                <div class="notfound_inner_content"><?php echo $notfound_page_content; ?></div>
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <?php get_template_part('includes/sidebars/sidebar-right'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;
        case 'blog_with_left':
            ?>
            <div class="mighty_page_content not_found">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <?php get_template_part('includes/sidebars/sidebar-left'); ?>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
                            <div class="mighty_notfound_content">
                                <div class="notfound_inner_content"><?php echo $notfound_page_content; ?></div>
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;
        case 'blog_with_right':
            ?>
            <div class="mighty_page_content not_found">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">
                            <div class="mighty_notfound_content">
                                <div class="notfound_inner_content"><?php echo $notfound_page_content; ?></div>
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <?php get_template_part('includes/sidebars/sidebar-right'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;
        case 'blog_full_width': ?>
            <div class="mighty_page_content not_found">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="mighty_notfound_content">
                                <div class="notfound_inner_content"><?php echo $notfound_page_content; ?></div>
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;
        default:
            ?>
            <div class="mighty_page_content not_found">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="mighty_notfound_content">
                                <div class="notfound_inner_content"><?php echo $notfound_page_content; ?></div>
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php

    }
} else {
    ?>
    <div class="mighty_page_content not_found">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="mighty_notfound_content">
                        <div class="notfound_inner_content"><?php echo $notfound_page_content; ?></div>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
get_footer();
?>