<?php $the_query = new WP_Query( 'showposts=5' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


	<article class="blogpost-summary">
		<div class="featured-image-wrapper">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<img src="<?php echo $image[0]; ?>" />
			<?php endif; ?>
			<div class="title">
				<?php the_title(); ?>
			</div>
		</div>
		<div class="introduction">
			<?php the_excerpt(); ?>
		</div>
		<div class="meta-data">
			<span class="pub-date">
				<i class="fa fa-calendar"></i><?php the_date(); ?>
			</span>
			<a href="<?php the_permalink() ?>#comments" class="comments">
				<i class="fa fa-comments"></i><?php comments_number( 'No responses', 'One response', '% responses' ); ?>
			</a>
		</div>
		<div class="buttons">
			<a href="<?php the_permalink() ?>" class="read-more-button">
				Read more<i class="fa fa-arrow-right"></i>
			</a>
		</div>
		<div class="clearfix"></div>
		<div class="tags-and-categories-wrapper">
			<div class="categories">
				<?php
					$categories = get_the_category();
					$output = '';
					if ($categories) {
						foreach ($categories as $category) {
							$output .= '<a href="'.get_category_link( $category->term_id ).'"><i class="fa fa-bookmark"></i>'.$category->cat_name.'</a>';
						}
						echo trim($output, $separator);
					}
				?>
			</div>
			<div class="tags">
				<?php
					$tags = get_the_tags();
					$output = '';
					if ($tags) {
						foreach ($tags as $tag) {
							$output .= '<a href="'.get_tag_link( $tag->term_id ).'"><i class="fa fa-tag"></i>'.$tag->name.'</a>';
						}
						echo trim($output, $separator);
					}
				?>
			</div>
		</span>
	</article>


<?php endwhile;?>