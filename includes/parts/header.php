<?php
$search_icon_enable = mighty_mod_e_attr('mighty_search_icon_enable', '1');
$menu_class_addition = '';
if($search_icon_enable == 1) {
    $menu_class_addition = '';
} else {
    $menu_class_addition = 'search_disabled';
}

?>
<div class="mighty_header_menu">
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <div class="mighty_mobile_menu_toggle">
            <a class="mighty_mobile_navigation_toggle menuopen" href="Javascript:void(0)">
                <i class="fa fa-bars" aria-hidden="true"></i>
            <a class="mighty_mobile_navigation_toggle menuclose" style="display:none;" href="Javascript:void(0)">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
        </div>

        <div class="mighty_logo"><!--Logo Starts Here -->
            <?php
            $custom_logo_id = mighty_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $mighty_logo = esc_url($image[0]);

            if($mighty_logo == ''){
                //check if the page is frontpage or blog page
                if(is_front_page() || is_blog()) { ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">     <?php esc_attr(bloginfo( 'name' )); ?>
                        </a>
                    </h1>
                <?php } else { ?>
                    <h2 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">     <?php esc_attr(bloginfo( 'name' ));  ?>
                        </a>
                    </h2>
                <?php } 
            } else {
                echo '<div class="mighty_site_logo">';
                echo '<a href="'. esc_url( home_url( '/' ) ) .'">';
                echo '<img src="'. $mighty_logo .'" alt="'. esc_attr(get_bloginfo( 'name' )) .'"</img>';
                echo '</a>';
                echo '</div>';
            } ?>    
        </div><!--End of Logo Here -->


        <div class="mighty_menus <?php echo $menu_class_addition ;?>">
                <?php if( has_nav_menu( 'header-menu' ) ) :

                wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_id' => 'nav', 'menu_class' => 'mighty_header_navigation', 'depth' => '3' ) );
                else :
                wp_page_menu(array('menu_id' => 'nav', 'before' => '<ul class="mighty_header_navigation">', 'after' => '</ul>', 'depth' => 1));
                endif; ?>
        </div><!--End of Primary Navigation -->

        <?php if( $search_icon_enable == 1 ) { ?>

        <div class="mighty_navigation_extras">
                <ul>
                    <li>
                        <a class="mighty_mobile_navigation_search searchopen" href="Javascript:void(0)">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                        <a class="mighty_mobile_navigation_search searchclose" href="Javascript:void(0)">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <?php } ?>

        
    </div>
    </div>
</div>
    <div class="mighty_search">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>



<div class="mobile_menu">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'div', 'menu_id' => 'mobile', 'container_class' => 'mighty_mobile_navigation', 'fallback_cb' => 'false') ); ?>
</div>