<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Page title</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/style/css/base.css" type="text/css" media="screen" />
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</head>

<body>
	<div id="background"></div>
	
	<header>
		<div class="header-holder">
			<?php get_template_part( 'navbar' ); ?>
		</div>
	</header>
	
	<section class="top-banner"></section>
	
	<main>
		<section class="content">			
			<?php
				if ( is_front_page()) {
					get_template_part( 'post/post-list' );
				}
				if ( is_single()) {
					get_template_part( 'post/single' );
				}
			?>
		</section>
		<aside class="side-column"></aside>
	</main>
</body>

</html>