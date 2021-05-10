<?php
/*
==================================================================================
Preloader File for Loading Preloader in the theme.
==================================================================================
*/

$preloader_image_src = get_template_directory_uri().'/images/preloader.GIF';

?>
<div class="mighty_preloader">
    <img src="<?php echo esc_url($preloader_image_src); ?>"/>
</div>