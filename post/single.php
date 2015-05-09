<?php the_post(); ?>

<article class="blogpost">
    <?php get_template_part( "post/post_partials/header" ); ?>
    <?php get_template_part( "post/post_partials/content" ); ?>
    <?php get_template_part( "post/post_partials/meta-data" ); ?>
    <div class="clearfix"></div>
    <?php get_template_part( "post/post_partials/tags-and-categories" ); ?>

    <?php comments_template(); ?>
</article>