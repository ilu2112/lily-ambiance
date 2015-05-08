<?php $the_query = new WP_Query( 'showposts=5' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <?php get_template_part( "post/blogpost-summary" ); ?>
<?php endwhile;?>