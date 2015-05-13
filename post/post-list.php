<?php
  $query_string = 'showposts=5';
  if (strlen(get_query_var('cat')) > 0) {
    $query_string .= '&cat='.get_query_var('cat'); 
  }
  if (strlen(get_query_var('m')) > 0) {
    $query_string .= '&m='.get_query_var('m'); 
  }
  $the_query = new WP_Query( $query_string );
?>



<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <?php get_template_part( "post/blogpost-summary" ); ?>
<?php endwhile;?>