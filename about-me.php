<div class="about-me">
  <div class="sidebar-content-wrapper">
    <div class="photo-wrapper">
      <div class="photo-stack"></div>
      <img src="<?php echo get_theme_mod( "personal_photo_field" ); ?>"></img>
    </div>
    <div class="details">
      <?php echo get_theme_mod( "description_field" ); ?>
    </div>

    <div class="socials">
      <?php if (strlen(get_theme_mod( "facebook_field" )) > 0) { ?>
        <a href="<?php echo get_theme_mod( "facebook_field" ) ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
      <?php } ?>

      <?php if (strlen(get_theme_mod( "github_field" )) > 0) { ?>
        <a href="<?php echo get_theme_mod( "github_field" ) ?>" target="_blank"><i class="fa fa-github-square"></i></a>
      <?php } ?>

      <?php if (strlen(get_theme_mod( "linkedin_field" )) > 0) { ?>
        <a href="<?php echo get_theme_mod( "linkedin_field" ) ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
      <?php } ?>

      <?php if (strlen(get_theme_mod( "email_field" )) > 0) { ?>
        <a href="mailto:<?php echo get_theme_mod( "email_field" ) ?>"><i class="fa fa-envelope-square"></i></a>
      <?php } ?>
    </div>
  </div>
</div>