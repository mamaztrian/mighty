<?php
if (   ! is_active_sidebar( 'pageleft'  )
	&& ! is_active_sidebar( 'blogleft' ) 
	):
		return;
else:

	if ( is_page() || is_404() ):
		dynamic_sidebar( 'pageleft' );
	else:
		dynamic_sidebar( 'blogleft' );
	endif;
endif; 
?>