<?php
  function ga_customizer( $wp_customize ) {
    $wp_customize->add_section(
      'ga_section',
      array(
        'title' => 'Google Analytics',
        'description' => 'Google Analytics settings',
        'priority' => 25,
      )
    );
  
    // GA Tracking Code
    $wp_customize->add_setting(
      'ga_tracking_code'
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'ga_tracking_code',
        array(
          'label'          => 'Google Analytics Tracking Code',
          'section'        => 'ga_section',
          'settings'       => 'ga_tracking_code',
          'type'           => 'text'
        )
      )
    );
  }

  add_action( 'customize_register', 'ga_customizer' );
?>