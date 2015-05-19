<div class="burger-button">
  <i class="fa fa-bars"></i>
</div>

<nav>
  <?php if (is_front_page() || is_single() || is_archive()) { ?>
    <li class="page_item current_page_item">
  <?php } else { ?>
    <li class="page_item">
  <?php } ?>  
  
    <a href="/">Blog</a>
  </li>
  <?php wp_list_pages('title_li='); ?>
</nav>