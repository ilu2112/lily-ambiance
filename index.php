<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php wp_title(); ?></title>
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
				if ( is_front_page() || is_category() || is_archive()) {
					get_template_part( 'post/post-list' );
				}
				if ( is_single()) {
					get_template_part( 'post/single' );
				}
			?>
		</section>



		<section class="side-column">
			<?php get_template_part( 'about-me' ); ?>
			
			<div class="side-section">
				<div class="title">
					<span class="slashes">//</span> Recent posts
				</div>
					<?php wp_get_archives('type=postbypost&limit=5'); ?>
			</div>

			<div class="side-section">
				<div class="title">
					<span class="slashes">//</span> Archives
				</div>
				<?php wp_get_archives('type=monthly'); ?>
			</div>
			
			<div class="side-section">	
				<div class="title">
					<span class="slashes">//</span> Categories
				</div>
				<?php wp_list_categories('title_li='); ?>
			</div>
		</section>
	</main>
</body>

</html>