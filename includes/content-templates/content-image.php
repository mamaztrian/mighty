<article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
    <div id="posts">
        <?php
        do_action('mighty_post_thumbnail');
        do_action('mighty_blog_post_metas', $post->ID);
        ?>
    </div>
</article><!-- #post-## -->


