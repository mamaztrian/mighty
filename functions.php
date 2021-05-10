<?php
/*
==================================================================================
This is the main function file for the theme
==================================================================================
*/

if ( ! isset( $content_width ) )
    $content_width = 793;

if (!function_exists('mighty_setup')) {

    function mighty_setup()
    {
        /*
        --------------------------------------------------------------------------------
        Loading Text Domain for the theme
        @documentation https://codex.wordpress.org/Function_Reference/load_textdomain
        --------------------------------------------------------------------------------
        */

        load_theme_textdomain('mighty', get_template_directory() . '/languages');

        /*
        --------------------------------------------------------------------------------
        This feature enables the editor style for the theme
        @documentation https://developer.wordpress.org/reference/functions/add_editor_style/
        --------------------------------------------------------------------------------
        */

        $bootstrap_css_link = get_template_directory_uri() . '/css/bootstrap.min.css';
        $editor_style_link = get_template_directory_uri().'/editor-style.css';
        $main_stylesheet = get_stylesheet_uri();
        add_editor_style(array($main_stylesheet, $bootstrap_css_link, $editor_style_link));

        /*
        --------------------------------------------------------------------------------
        This feature enables post and comment RSS feed links to head.
        @documentation http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
        --------------------------------------------------------------------------------
        */

        add_theme_support('automatic-feed-links');

        add_theme_support( "title-tag" );
        
        if ( ! isset( $content_width ) ) $content_width = 900;

        /*
        --------------------------------------------------------------------------------
        This feature enables post-thumbnail support for a theme.
        @documentation http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
        --------------------------------------------------------------------------------
        */

        add_theme_support('post-thumbnails');

        /*
        --------------------------------------------------------------------------------
        This feature enables WooCommerce support for a theme.
        @documentation https://docs.woocommerce.com/document/declare-woocommerce-support-in-third-party-theme/
        --------------------------------------------------------------------------------
        */

        add_theme_support('woocommerce');

        /*
        --------------------------------------------------------------------------------
        This feature enables custom-menus support for a theme.
        @documentation http://codex.wordpress.org/Function_Reference/register_nav_menus
        --------------------------------------------------------------------------------
        */

        register_nav_menus(array(
            'header-menu' => __('Header Menu', 'mighty'),
            'footer' => __('Footer menu', 'mighty'),
            'top' => __('Top Bar Right menu', 'mighty'),
        ));

        /*
        --------------------------------------------------------------------------------
        Switches default core markup for search form, comment form, and comments
        --------------------------------------------------------------------------------
        */

        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list',));

        /*
        --------------------------------------------------------------------------------
        Enable support for Post Formats.
        @documentation http://codex.wordpress.org/Post_Formats
        --------------------------------------------------------------------------------
        */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio',
        ));

        /*
        ---------------------------------------------------------------
        Logo Support
        ---------------------------------------------------------------
        */
        add_theme_support( 'custom-logo', array(
            'height'      => 150,
            'width'       => 300,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );

        $args = array(
            'flex-height'    => true,
            'default-image' => get_template_directory_uri() . '/images/banner-header.png',
        );

        add_theme_support( "custom-header", $args);
        add_theme_support( "custom-background");


    }
}
add_action('after_setup_theme', 'mighty_setup');

/*
--------------------------------------------------------------------------------
Enqueue css & scripts for the theme
@documentation https://developer.wordpress.org/reference/functions/wp_enqueue_script/
--------------------------------------------------------------------------------
*/

function mighty_scripts()
{

    $current_theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), current_time('mysql'), 'all');

    wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/css/fontawesome-all.css', array(), $current_theme_version, 'all');

    wp_enqueue_style('mighty-woocommerce', get_template_directory_uri() . '/css/mighty-woocommerce.css', array(), $current_theme_version, 'all');

    wp_enqueue_style('mighty-style', get_stylesheet_uri(), array(), $current_theme_version, 'all');

    wp_enqueue_style('open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,700,600');

    wp_enqueue_style('monteserrat', '//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900', array(), '1.0', 'all');

    wp_enqueue_script('jquery-ui-accordion');

    wp_enqueue_script('jquery-ui-progressbar');

    wp_enqueue_script('jquery-ui-tabs');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), $current_theme_version, true);

    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/js/fontawesome-all.js', array('jquery'), $current_theme_version, true);

    wp_enqueue_script('mighty_extras', get_template_directory_uri() . '/js/mighty_extras.js', array(), '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}

add_action('wp_enqueue_scripts', 'mighty_scripts');

/*
--------------------------------------------------------------------------------
Remove the annoying default inline style in the page content for the WP Gallery.
@documentation http://wpengineer.com/2352/remove-inline-style-of-wordpress-gallery-shortcode/
ToDO Remove from free version
--------------------------------------------------------------------------------
*/
//add_filter('use_default_gallery_style', '__return_false');

/*
--------------------------------------------------------------------------------
Load the Init Files
--------------------------------------------------------------------------------
*/

require_once('includes/init.php');

/*
--------------------------------------------------------------------------------
Load the Customizer
--------------------------------------------------------------------------------
*/

require_once('includes/customizer/customizer.php');


function mighty_theme_customize_css()
{
    get_template_part('includes/customizer/customize_output');

}
add_action( 'wp_head', 'mighty_theme_customize_css');

/*
--------------------------------------------------------------------------------
Make the Customizer Mod Function Easy
--------------------------------------------------------------------------------
*/

function mighty_mod($data, $default = null) {
    return get_theme_mod($data, $default);
}

function mighty_mod_e_attr($data, $default = null) {
    return esc_attr(get_theme_mod($data, $default));
}

function mighty_mod_color($data, $default = null) {
    return esc_attr(get_theme_mod($data, $default));
}

add_filter('body_class', 'mighty_body_classes');

function mighty_body_classes($classes) {
    $classes[] = '';
    if(is_404()) {
        $classes[] = 'mightynotfound';
    }
    return $classes;
}

/*
--------------------------------------------------------------------------------
Display Custom Admin Notice
--------------------------------------------------------------------------------
*/
function mighty_custom_admin_notice() {
    $current_theme_version = wp_get_theme();
    $currentversion = str_replace('.','',(esc_html( $current_theme_version->get('Version') )));
    $isitdismissed = 'mighty_notice_dismissed'.$currentversion;
    if ( !get_user_meta( get_current_user_id() , $isitdismissed ) ) { ?>
        <div class="notice notice-success is-dismissible mighty_notice" data-dismissible="disable-done-notice-forever">
            <div>
                <p>
                    <?php esc_html_e('Thank you for using the free version of ','mighty'); ?>
                    <?php echo esc_html( $current_theme_version->get('Name') );?> -
                    <?php echo esc_html( $current_theme_version->get('Version') );
                    ?>
                    <?php esc_html_e('theme. Want more features? Check out the', 'mighty'); ?>
                    <script type="text/javascript">alert(<?php echo $isitdismissed?>);</script>
                    <a href="<?php echo esc_url( 'http://meetmighty.com/themes/mighty-wordpress-theme/');?>" target="_blank" aria-label="Dismiss the welcome panel">
                        <strong><?php esc_html_e('PRO version','mighty');?></strong>
                    </a>
                    <?php esc_html_e('for more options and professional support!', 'mighty'); ?>
                    <a href="?mighty-notice-dismissed<?php echo $currentversion;?>"><?php esc_html_e('Dismiss this message', 'mighty'); ?></a>
                </p>
            </div>

        </div>

        <?php
    }
}
add_action('admin_notices', 'mighty_custom_admin_notice');

function mighty_notice_dismissed() {
    $current_theme_version = wp_get_theme();
    $currentversion = str_replace('.','',(esc_html( $current_theme_version->get('Version') )));
    $dismissurl = 'mighty-notice-dismissed'.$currentversion;
    $isitdismissed = 'mighty_notice_dismissed'.$currentversion;
    $user_id = get_current_user_id();
    if ( isset( $_GET[$dismissurl] ) )
        add_user_meta( $user_id, $isitdismissed, 'true', true );
}
add_action( 'admin_init', 'mighty_notice_dismissed' );


