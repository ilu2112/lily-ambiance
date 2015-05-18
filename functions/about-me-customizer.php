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

    // linked in link
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

    // email address
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