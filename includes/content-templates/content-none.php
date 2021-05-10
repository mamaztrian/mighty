<section class="not-found">
	<div class="page-content no-results">
    <header class="page-header">
		<h3 class="page-title"><?php esc_attr_e( 'Our apologies, nothing was found', 'mighty' ); ?></h3>
	</header><!-- .page-header -->

	
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( esc_html_e( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mighty' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Unfortunately, nothing matched your search terms. Please try again with some different keywords.', 'mighty' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mighty' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section><!-- .no-results -->
