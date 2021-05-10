<?php
function is_blog() {
	global $post;
	$posttype = get_post_type( $post );

	return ( ( ( is_archive() ) || ( is_author() ) || ( is_category() ) || ( is_home() ) || ( is_single() ) || ( is_tag() ) ) && ( $posttype == 'post' ) ) ? true : false;
}


/*
========================================================
Mighty Blog Thumbnail
do_action('mighty_post_thumbnail');
========================================================
*/
add_action( 'mighty_post_thumbnail', 'mighty_post_thumbnail_fnc' );

function mighty_post_thumbnail_fnc() {
	if ( has_post_thumbnail() ) : ?>

        <div class="post-img">

			<?php the_post_thumbnail(); ?>

        </div>
	<?php endif;
}

/*
========================================================
Mighty Blog Post Title
do_action('mighty_blog_post_title');
========================================================
*/
add_action( 'mighty_blog_post_title', 'mighty_blog_post_title_fnc' );

function mighty_blog_post_title_fnc() {
	echo '<h4 class="post-title"><a href="' . esc_url( get_the_permalink() ) . '">' . get_the_title() . '</a></h4>';
}

/*
========================================================
Mighty Blog Post Title
do_action('mighty_blog_post_metas');
========================================================
*/
add_action( 'mighty_blog_post_metas', 'mighty_blog_post_metas_fnc' );

function mighty_blog_post_metas_fnc( $post ) {
	?>
    <div class="post-meta">
		<?php the_time( 'F jS, Y' ) ?>,
		<?php comments_popup_link( __( 'No comments yet', 'mighty' ), __( '1 comment', 'mighty' ), __( '% comments', 'mighty' ), 'comments-link', __( 'Comments are off for this post', 'mighty' ) ); ?>
        ,
		<?php esc_attr_e( 'Posted in', 'mighty' ); ?> <?php
		if ( is_singular( 'mighty_faq' ) ):
			$terms = get_the_terms( $post, 'mighty_faq_cat' );
			foreach ( $terms as $term ) {
				echo $term->name;
			}
		else:
			the_category( ', ' );
		endif;
		?>
		<?php echo sprintf( __( 'Posted by: %s', 'mighty' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>' );
		?>


    </div>
    <div style="display:none"><?php get_the_tag_list(); ?></div>
	<?php
}

/*
========================================================
Mighty Blog Post Content
do_action('mighty_blog_post_content');
========================================================
*/
add_action( 'mighty_blog_post_content', 'mighty_blog_post_content_fnc' );

function mighty_blog_post_content_fnc() {
	$blog_posts_excerpt = mighty_mod_e_attr('mighty_blog_posts_excerpt','excerpt');
	if ( is_single() || get_post_format() == 'video' ):
		the_content();
	else:
		if ( $blog_posts_excerpt === 'excerpt' ) {
			echo '<div class="mighty_posts_contents">';
			the_excerpt();
			echo '</div>';
		} else {
			the_content();
			echo '</div>';
		}
	endif;
}

/*
========================================================
Mighty Blog Post pagination
do_action('mighty_blog_post_pagination');
========================================================
*/
function mighty_blog_post_pagination_fnc( $max_posts = null, $total = null, $paged = null ) {
	global $wp_query;

	$max_num_posts = round( ( $total / $max_posts ) );

	$big = 999999999;
	echo '<div class="mighty-pagination">';

	echo paginate_links( array(
		'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'    => '?p=%#%',
		'current'   => max( 1, $paged ),
		'total'     => $max_num_posts,
		'prev_text' => __( 'Previous', 'mighty' ),
		'next_text' => __( 'Next', 'mighty' ),
		'type'      => 'list',
	) );

	echo '</div>';
}

/*
========================================================
Mighty Blog Post pagination for front page
do_action('mighty_blog_post_pagination');
========================================================
*/
function mighty_blog_post_pagination( $paged = null ) {
	global $wp_query;

	$max_num_posts = $wp_query->max_num_pages;

	$big = 999999999;
	echo '<div class="mighty-pagination blog_page">';


	echo paginate_links( array(
		'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'    => '?p=%#%',
		'current'   => max( 1, $paged ),
		'total'     => $max_num_posts,
		'prev_text' => __( 'Previous', 'mighty' ),
		'next_text' => __( 'Next', 'mighty' ),
		'type'      => 'list',
	) );

	echo '</div>';
}

/*
========================================================
Mighty Social icons
do_action('mighty_social_icons');
========================================================
*/
add_action( 'mighty_social_icons', 'mighty_social_icons_fnc' );
function mighty_social_icons_fnc() {
	get_template_part( 'includes/parts/social_icons' );
}


/*
========================================================
Mighty Display Title
do_action('mighty_display_title');
========================================================
*/
add_action( 'mighty_display_title', 'mighty_display_title_fnc' );

function mighty_display_title_fnc( $post )
{
    global $post;
    if(!is_search()) {
        $post_ID = $post->ID;


        $disable_class = '';
    }
    ?>
    <div id="mighty_page_header" class="<?php echo $disable_class; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="mighty_page_title">
                            <?php
                            $mighty_blog_title = mighty_mod('mighty_blog_page_title', 'Blog');

                            $mighty_custom_404_title = mighty_mod('mighty_not_found_title', '404');

                            $mighty_woocommerce_title = mighty_mod('mighty_woocommerce_page_title', 'Shop');
                            $mighty_bbpress_title = mighty_mod('mighty_bbpress_page_title', 'Forum');

                            if (is_home() && !is_author() && !is_category() && !is_single() && !is_page()) {

                                echo esc_attr($mighty_blog_title);

                            }

                            if (is_404()) {

                                if ($mighty_custom_404_title) {
                                    echo esc_attr($mighty_custom_404_title);
                                } else {
                                    esc_attr_e('404', 'mighty');
                                }

                            }

                            if (class_exists('WooCommerce')) {
                                if (is_shop()) {
                                    if ($mighty_woocommerce_title) {
                                        echo esc_attr($mighty_woocommerce_title);
                                    } else {
                                        esc_attr_e('Our Shop', 'mighty');
                                    }
                                }
                            }

                            if (is_search()) {
                                printf(__('Search Results for: %s', 'mighty'), '<span>' . get_search_query() . '</span>');
                            }

                            if (is_author()) {
                                printf(__('Articles by: %s', 'mighty'), '<span>' . get_the_author() . '</span>');
                            }

                            if (is_category()) {
                                echo the_archive_title();
                            }

                            if (is_single() || is_page() ) {
                                echo get_the_title($post);
                            }

                            $faq_archive_title = mighty_mod('mighty_faq_archive_title', 'Frequently Asked Questions');
                            if (is_post_type_archive('mighty_faq')) {
                                echo $faq_archive_title;
                            }

                            $ourteam_archive_title = mighty_mod('mighty_ourteam_archive_title', 'Our Teams');
                            if (is_post_type_archive('mighty_our_team')) {
                                echo $ourteam_archive_title;
                            }
                            $downloads_archive_title = mighty_mod('mighty_edd_page_title', 'Downloads');
                            if (is_post_type_archive('download')) {
                                echo $downloads_archive_title;
                            }

                            $mighty_portfolio_title = mighty_mod('mighty_portfolio_title', 'Portfolios');
                            if (is_post_type_archive('mighty_portfolio')) {
                                echo $mighty_portfolio_title;
                            }
                            if (is_archive() && !is_post_type_archive('mighty_faq') &&!is_post_type_archive('mighty_portfolio') && !is_post_type_archive('mighty_our_team') && !is_post_type_archive('woocommerce') && !is_category() && !is_author() &&!is_post_type_archive('download') &&!is_post_type_archive('product') &&!is_post_type_archive('forum')) {
                                the_archive_title();
                            }
                            if (class_exists('bbPress')) {
                                if (is_bbpress()) {
                                    if (bbp_is_forum_archive()) {
                                        echo $mighty_bbpress_title;
                                    }
                                    if ( bbp_is_user_home() ) {
                                        echo get_the_title(); 
                                    }
                                }
                            }

                            ?>
                        </h1>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mighty_breadcrumbs">
                        <?php

                        if (function_exists('bcn_display')) {
                            bcn_display();
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    
}



/*
========================================================
Mighty Excerpt Length
do_action('mighty_display_bundle');
========================================================
*/

function mighty_custom_excerpt_length( $length ) {
	$length  = mighty_mod_e_attr('mighty_blog_posts_excerpt_count', '50');
	if ( $length ):
		return $length;
	else:
		return 50;
	endif;
}

add_filter( 'excerpt_length', 'mighty_custom_excerpt_length', 999 );

function mighty_excerpt_more( $more ) {
	/*
	------------------------------------------------------
	Read More Blog Settings with Btn styles
	------------------------------------------------------
	 */
	$length    = mighty_mod('mighty_blog_posts_excerpt_read_more_text', 'Read More');

	$btn_class = "btn btn-default";

	if ( $length ):
		$read_more_string = $length;
	else:
		$read_more_string = __( 'Read More', 'mighty' );
	endif;

	return sprintf( '<br/><br/><a class="' . $btn_class . '" href="%1$s">%2$s</a>',
		get_permalink( get_the_ID() ),
		$read_more_string
	);
}

add_filter( 'excerpt_more', 'mighty_excerpt_more' );

/*
========================================================
Render sidebar template
========================================================
*/
if(!function_exists('mighty_sidebars_render')) {
    function mighty_sidebars_render($value) {
        if(is_array($value)){
            foreach ($value as $val) {
                get_template_part('includes/sidebars/'. $val);
            }
        } else {
            get_template_part('includes/sidebars/'. $value);
        }
    }
}

/*
========================================================
Mighty Comment Custom Function
========================================================
*/
if ( ! function_exists( 'mighty_comment' ) ) :
    function mighty_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;

        if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
                <div class="comment-body">
                    <?php _e( 'Pingback:', 'mighty' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'mighty' ), '<span class="edit-link">', '</span>' ); ?>
                </div>
            </li>
        <?php else : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
                <article id="div-comment-<?php comment_ID(); ?>" class="comment-wrapper">
                    <div class="comment-avatar">
                        <?php if ( 0 != $args['avatar_size'] ) { echo get_avatar( $comment, $args['avatar_size'] = '58' ); } ?>
                    </div>
                    <div class="comment-body">
                        <div class="comment-author vcard">
                            <?php printf( ('%s'), sprintf( '<cite class="fn">%s</cite> |', get_comment_author_link() ) ); ?>
                            <!-- .comment-author -->
                            <time datetime="<?php comment_time( 'c' ); ?>">
                                <?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'mighty' ), get_comment_date(), get_comment_time() ); ?>
                            </time>

                            <div style="float:right; margin-right:30px;">
                                <?php edit_comment_link( __( 'Edit', 'mighty' ), '<span class="edit-link">', '</span>' ); ?> |

                                <?php
                                comment_reply_link( array_merge( $args, array(
                                    'add_below' => 'div-comment',
                                    'depth'     => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before'    => '<span class="reply">',
                                    'after'     => '</span>',
                                ) ) );
                                ?>
                            </div>

                            <?php if ( '0' == $comment->comment_approved ) : ?>
                                <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'mighty' ); ?></p>
                            <?php endif; ?>
                        </div><!-- .comment author -->

                        <div class="comment-content">
                            <?php comment_text(); ?>
                        </div><!-- .comment-content -->
                    </div>


                </article><!-- .comment-body -->
            </li>
            <?php
        endif;
    }
endif;

