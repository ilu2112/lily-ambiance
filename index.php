<!DOCTYPE HTML>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/style/css/base.css" type="text/css" media="screen" />
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/lightbox.min.js"></script>
</head>

<body>
  <header>
    <div class="header-holder">
      <a class="page-logo" href="/">
        <span class="slashes">//</span> <?php echo get_bloginfo('name'); ?>
      </a>
      <?php get_template_part( 'navbar' ); ?>
    </div>
  </header>
  
  <section class="top-banner"></section>
  
  <main>
    <section class="content">     
      <?php
        if ( is_front_page() || is_category() || is_archive() ) {
          get_template_part( 'post/post-list' );
        } else if ( is_single() ) {
          get_template_part( 'post/single' );
        } else if ( is_page() ) {
          get_template_part( 'page-content' );
        }
      ?>
    </section>



    <section class="side-column">
      <?php get_template_part( 'about-me' ); ?>
      
      <div class="side-section">
        <div class="sidebar-content-wrapper">
          <div class="title">
            <span class="slashes">//</span> Recent posts
          </div>
            <?php wp_get_archives('type=postbypost&limit=5'); ?>
        </div>
      </div>

      <div class="side-section">
        <div class="sidebar-content-wrapper">
          <div class="title">
            <span class="slashes">//</span> Archives
          </div>
          <?php wp_get_archives('type=monthly'); ?>
        </div>
      </div>
      
      <div class="side-section">
        <div class="sidebar-content-wrapper">
          <div class="title">
            <span class="slashes">//</span> Categories
          </div>
          <?php wp_list_categories('title_li='); ?>
        </div>
      </div>
    </section>
  </main>

  <?php wp_footer(); ?>
  <?php get_template_part( 'google-analytics' ); ?>
</body>

</html>