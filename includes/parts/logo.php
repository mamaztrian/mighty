<div class="mighty_logo"><!--Logo Starts Here -->
<?php
	$mighty_logo = $_mighty['mighty_logo']['url'];
	$mighty_logo = esc_url($mighty_logo);
	if(!$mighty_logo){ ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
	<?php } else { 
		echo '<div class="mighty_site_logo">';
		echo '<img src="'. $mighty_logo .'" alt="'. esc_attr(get_bloginfo( 'name' )) .'"</img>';
		echo '</div>';
	} ?>	

</div><!--End of Logo Here -->