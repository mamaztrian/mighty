<div id="sidebar" class="clf">

<?php if ( function_exists('is_bbpress') && is_bbpress() ) : ?>
	
	<?php dynamic_sidebar( 'sidebar-bb' ); ?>
				
<?php elseif ( is_blog() ) : ?>

	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
	
<?php else : ?>

	<?php dynamic_sidebar( 'sidebar-page' ); ?>

<?php endif; ?>

</div>
