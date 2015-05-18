<div class="featured-image-wrapper">
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <div class="featured-image">
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <img src="<?php echo $image[0]; ?>" />
    </div>
  <?php endif; ?>
  <div class="title-wrapper">
    <div class="title">
      <?php the_title(); ?>
    </div>
  </div>
</div>