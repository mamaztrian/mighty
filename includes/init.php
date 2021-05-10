<?php
/*
--------------------------------------------------------------------------------
Create a path for includes directory
---------------------------------------------------mi-----------------------------
*/
$path = get_template_directory() . '/includes/';

/*
--------------------------------------------------------------------------------
Load the Widgets for the Theme
--------------------------------------------------------------------------------
*/
require_once($path . 'widgets/widgets_load.php');

/*
---------------------------------------------------------------
Load the Extra Options
---------------------------------------------------------------
*/
require_once($path . 'extras/woocommerce_buttons.php');

/*
--------------------------------------------------------------------------------
Including Template Function files
--------------------------------------------------------------------------------
*/

require_once($path . 'templates/template_functions.php');

/*
--------------------------------------------------------------------------------
Include the TGM Plugin
--------------------------------------------------------------------------------
*/
require_once($path . 'tgm/tgm.php');

/*
--------------------------------------------------------------------------------
Include the Pro Upsell
--------------------------------------------------------------------------------
*/
require_once($path . 'trt-customizer-pro/class-customize.php');

?>