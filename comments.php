<div class="comments-area-wrapper" id="comments">
	<div class="comments-area">

		<?php if ( have_comments() ) : ?>

			<h2 class="comments-title">
				<?php
					printf( 
						_n( '%1$s comment', '%1$s comments', get_comments_number() ),
						number_format_i18n( get_comments_number() )
					);
				?>
			</h2>

			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ol',
						'short_ping' => true,
						'avatar_size'=> 0,
						'callback' => format_comment
					) );
				?>
			</ol><!-- .comment-list -->

		<?php endif; // have_comments() ?>

		<?php comment_form(); ?>
	</div><!-- #comments -->
</div>
