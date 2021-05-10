<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php esc_attr_x( 'Search for:', 'label', 'mighty' ); ?></span>

	<input type="text" class="form-control"  placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'mighty' ) ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
    <?php
    /*
    ------------------------------------------------------------------
    Get the Btn settings if defined individually
    ------------------------------------------------------------------
     */
    $btn_style = mighty_mod_e_attr('mighty_404_btn_style', 'default');
    $btn_color = mighty_mod_e_attr('mighty_404_btn_color', 'default');
    $btn_size = mighty_mod_e_attr('mighty_404_btn_size', 'btn');
    $btn_text = mighty_mod_e_attr('mighty_404_btn_text', 'search');
    $btn_text_string = '';

    if(is_404()) {
        $btn_class = "btn btn-$btn_color $btn_style $btn_size";
        $btn_text_string = $btn_text;
    } else {
        $btn_class = "btn search_form btn-primary";
        $btn_text_string = __('Search', 'mighty');
    }

    ?>

	<button class="<?php echo esc_attr($btn_class); ?>" type="submit" value="<?php echo esc_attr($btn_text_string); ?>"><?php echo $btn_text_string; ?> </button>

</form>    
