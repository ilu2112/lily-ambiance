<?php
	function lily_excerpt_length( $length ) {
		return 1000;
	}
	add_filter( 'excerpt_length', 'lily_excerpt_length' );
    add_theme_support( 'post-thumbnails' );
?>



<?php
    function format_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment; ?>
        
        <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
            <div class="comment-intro">
                <?php printf(__('%s'), get_comment_author_link()) ?>
                <a class="comment-permalink comment-date" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>">
                    <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?>
                </a>
            </div>
            
            <?php if ($comment->comment_approved == '0') : ?>
                <em><php _e('Your comment is awaiting moderation.') ?></em><br />
            <?php endif; ?>
            
            <?php comment_text(); ?>
        </div>
    <?php }
?>



<?php
    add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
    function baw_hack_wp_title_for_home( $title ) {
        if( empty( $title ) && ( is_home() || is_front_page() ) ) {
            return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
        }
        return $title;
    }
?>