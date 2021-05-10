<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>

    <div id="posts">

        <?php
        do_action('mighty_post_thumbnail');
        do_action('mighty_blog_post_content');

                
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
        ?>
    </div>

</article><!-- #post-## -->


