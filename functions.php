<?php
  add_theme_support( 'post-thumbnails' );

  include 'functions/comments.php';
  include 'functions/wp-title-for-home.php';
  include 'functions/about-me-customizer.php';
  include 'functions/excerpt.php';
  include 'functions/pagination.php';

  add_filter('show_admin_bar', '__return_false');
?>