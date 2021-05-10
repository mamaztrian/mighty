<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>

    <div id="posts">

        <?php
        do_action('mighty_post_thumbnail');
        do_action('mighty_blog_post_title', $post->ID);
        do_action('mighty_blog_post_metas');
        do_action('mighty_blog_post_content');

        wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mighty' ),
				'after'  => '</div>',
			) );
        ?>
    </div>

</article><!-- #post-## -->


