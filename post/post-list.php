<?php if (is_archive()) { ?>
  <div class="content-title">
    <span class="slashes">//</span>
      <?php echo single_month_title(" "); ?>
      <?php echo single_cat_title(); ?>
  </div>
<?php } ?>


<?php
  // get posts data
  $args = array( 'posts_per_page' => get_option('posts_per_page') );
  $params_to_pass = array( 'cat', 'm', 'tag', 'paged');
  foreach ( $params_to_pass as $param ) :
    if (get_query_var($param)) {
      $args[$param] = get_query_var($param);
    }
  endforeach;
  $myposts = get_posts($args);
  
  // renger posts list
  foreach ( $myposts as $post ) : setup_postdata( $post );
    get_template_part( "post/blogpost-excerpt" );
    wp_reset_postdata();
  endforeach;
?>


<?php numeric_posts_pagination(); ?>