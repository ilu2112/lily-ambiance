<?php the_post(); ?>

<div class="page-content-wrapper">
  <div class="content-title">
    <span class="slashes">//</span>
    <?php the_title(); ?>
  </div>

  <div class="page-content">
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <img src="<?php echo $image[0]; ?>" />
    <?php endif; ?>
    <?php the_content(); ?>
  </div>
</div>