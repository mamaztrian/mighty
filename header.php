<!DOCTYPE html>
<!-- Mighty WordPress Theme By http://www.meetmighty.com -->
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php

/*
--------------------------------------------------------------------------------
Include the Preloader
--------------------------------------------------------------------------------
*/
get_template_part('includes/parts/preloader');

?>

<div id="mighty_wrapper">
    <div class="mighty_header">
        <?php
        /*
        --------------------------------------------------------------------------------
        Include the Top Bar
        --------------------------------------------------------------------------------
        */
        get_template_part('includes/parts/top-bar');

        /*
        --------------------------------------------------------------------------------
        Include the Header Elements
        --------------------------------------------------------------------------------
        */

        get_template_part('includes/parts/header');

        ?>
    </div>