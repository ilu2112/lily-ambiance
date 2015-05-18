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
</div>