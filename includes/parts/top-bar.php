<?php
/*
==================================================================================
Top Bar Settings Page
==================================================================================
*/

$enable_top_bar = mighty_mod_e_attr('enable_top_bar', 0);
$top_bar_left_content = mighty_mod('top_bar_left_content');
$top_bar_left_content = $top_bar_left_content ? $top_bar_left_content : __('<i class="far fa-envelope-open"></i> &nbsp; email@example.com | &nbsp; <i class="fas fa-phone"></i> &nbsp; 123456789', 'mighty');

$top_bar_right_selection = mighty_mod_e_attr('mighty_top_right_selection', 'mighty_top_none');

/*
--------------------------------------------------------------------------------
Check if Top bar is enabled by users
On default top bar is disabled
--------------------------------------------------------------------------------
*/

if ($enable_top_bar == 1) {
    ?>
    <div class="mighty_top">
        <div class="container">
            <div class="row">
                <?php
                switch ($top_bar_right_selection) {
                    case 'mighty_top_navigation_menu':
                        ?>
                        <div class="col-md-6 mighty_top_content">
                            <?php echo $top_bar_left_content; ?>
                        </div>
                        <div class="col-md-6 mighty_top_navigation">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'top',
                                    'container' => '',
                                    'menu_class' => 'top_menu',
                                    'depth' => '1',
                                    'fallback_cb' => false,
                                )
                            );
                            ?>
                        </div>
                        <?php
                        break;
                    case 'mighty_top_social_icons':
                        ?>
                        <div class="col-md-6 mighty_top_content">
                            <?php echo $top_bar_left_content; ?>
                        </div>
                        <div class="col-md-6 mighty_top_social_icons">
                            <?php do_action('mighty_social_icons'); ?>
                        </div>
                        <?php
                        break;
                    case 'mighty_top_none':
                        ?>
                        <div class="col-md-12 mighty_top_content">
                            <?php echo $top_bar_left_content; ?>
                        </div>
                        <?php
                        break;

                    default:

                        break;
                }

                ?>
            </div>
        </div>
    </div>
<?php } ?>