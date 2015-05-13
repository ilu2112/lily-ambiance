<?php
	function lily_excerpt_length( $length ) {
		return 1000;
	}
	add_filter( 'excerpt_length', 'lily_excerpt_length' );
    add_theme_support( 'post-thumbnails' );
?>



<?php
    function format_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment; ?>
        
        <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
            <div class="comment-intro">
                <?php printf(__('%s'), get_comment_author_link()) ?>
                <a class="comment-permalink comment-date" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>">
                    <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?>
                </a>
            </div>
            
            <?php if ($comment->comment_approved == '0') : ?>
                <em><php _e('Your comment is awaiting moderation.') ?></em><br />
            <?php endif; ?>
            
            <?php comment_text(); ?>
        </div>
    <?php }
?>



<?php
    add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
    function baw_hack_wp_title_for_home( $title ) {
        if( empty( $title ) && ( is_home() || is_front_page() ) ) {
            return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
        }
        return $title;
    }
?>


<?php
    function about_me_customizer( $wp_customize ) {
        $wp_customize->add_section(
            'about_me_section',
            array(
                'title' => '"About me" widget',
                'description' => 'This is an "about me" widget settings.',
                'priority' => 35,
            )
        );

        // photo
        $wp_customize->add_setting(
            'personal_photo_field'
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
               $wp_customize,
               'personal_photo',
               array(
                   'label'      => 'Personal photo',
                   'section'    => 'about_me_section',
                   'settings'   => 'personal_photo_field',
                   'context'    => 'personal_photo_field' 
               )
           )
        );

        // description
        $wp_customize->add_setting(
            'description_field'
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'description_field',
                array(
                    'label'          => 'Description',
                    'section'        => 'about_me_section',
                    'settings'       => 'description_field',
                    'type'           => 'text'
                )
            )
        );

        // facebook link
        $wp_customize->add_setting(
            'facebook_field'
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'facebook_field',
                array(
                    'label'          => 'Link to Facebook profile',
                    'section'        => 'about_me_section',
                    'settings'       => 'facebook_field',
                    'type'           => 'text'
                )
            )
        );

        // github link
        $wp_customize->add_setting(
            'github_field'
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'github_field',
                array(
                    'label'          => 'Link to Github profile',
                    'section'        => 'about_me_section',
                    'settings'       => 'github_field',
                    'type'           => 'text'
                )
            )
        );

        // linke in link
        $wp_customize->add_setting(
            'linkedin_field'
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'linkedin_field',
                array(
                    'label'          => 'Link to LinkedIn profile',
                    'section'        => 'about_me_section',
                    'settings'       => 'linkedin_field',
                    'type'           => 'text'
                )
            )
        );

        // linke in link
        $wp_customize->add_setting(
            'email_field'
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'email_field',
                array(
                    'label'          => 'Contact e-mail',
                    'section'        => 'about_me_section',
                    'settings'       => 'email_field',
                    'type'           => 'text'
                )
            )
        );
    }
    add_action( 'customize_register', 'about_me_customizer' );
?>