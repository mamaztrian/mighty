<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
    <div id="posts">
        <?php
        the_content();
        do_action('mighty_blog_post_metas', $post->ID);
        ?>
    </div>
</article><!-- #post-## -->


