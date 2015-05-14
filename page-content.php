<div class="page-content-wrapper">
  <div class="content-title">
    <span class="slashes">//</span>
    <?php
      global $post;
      $pagename = $post->post_title;
      echo $pagename;
    ?>
  </div>

  <div class="page-content">
    <?php echo $post->post_content; ?>
  </div>
</div>