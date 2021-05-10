<?php
/*
==================================================================================
This is the main footer file for the theme
==================================================================================
*/

/*
--------------------------------------------------------------------------------
Load the Footer Widget Section
--------------------------------------------------------------------------------
*/
get_template_part('includes/sidebars/sidebar-bottom');

?>
<footer class="mighty_footer">
    <div class="container">
        <div class="row">
            <?php
            $copyright_right_enable = esc_html(mighty_mod('mighty_footer_right', 'mighty_footer_center'));

            $copyright_class_name = '';

            if ($copyright_right_enable === 'mighty_footer_center') {
                $copyright_class_name = 'col-md-12 col-lg-12 col-sm-12 col-xs-12 center';
            } else {
                $copyright_class_name = 'col-md-6 col-lg-6 col-sm-12 col-xs-12';
            }
            ?>


            <div class="<?php echo $copyright_class_name; ?> mighty_copyright">
                <?php

                //check if custom copyright is enabled
                $copyright_text_enable = esc_attr(mighty_mod('enable_copyright_text'));

                //get the custom copyright text
                $copyright_text = esc_html(mighty_mod('mighty_copyright_text'));
                if(!$copyright_text) {
                    $copyright_text = esc_attr(get_bloginfo('name'));
                }

                $year = date_i18n(__('Y','mighty'));

                if ($copyright_text_enable == 1):
                    esc_attr_e('Copyright &copy; &nbsp;', 'mighty');

                    printf('%s', $year); ?>
                    <strong><?php echo $copyright_text; ?></strong>. <?php esc_attr_e('All rights reserved.', 'mighty');
                else:
                    esc_attr_e('Copyright &copy; &nbsp;', 'mighty');

                    printf('%s', $year); ?>
                    <strong> <?php echo esc_attr(get_bloginfo('name')); ?></strong>. <?php esc_attr_e('All rights reserved.', 'mighty');
                endif;
                ?>

            </div>
            <div class="<?php echo $copyright_class_name; ?> mighty_footer_right">
                <?php

                //check what is asked to be shown on right module
                if ($copyright_right_enable == 'mighty_footer_navigation_menu'):
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'container' => '',
                            'menu_class' => 'footer_menu',
                            'depth' => '1',
                            'fallback_cb' => false,
                        )
                    );

                elseif ($copyright_right_enable === 'mighty_footer_social_icons'):
                    do_action('mighty_social_icons');
                else:
                    //wp_page_menu(array('menu_id' => 'nav', 'before' => '<ul class="footer_menu">', 'after' => '</ul>'));
                endif;
                ?>
            </div>

</footer>
</div>
<?php
wp_footer();
?>

</body>
</html>