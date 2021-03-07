<?php

register_nav_menu("primary", "Top Navbar");

function home_customizer($wp_customize)
{
  require 'section_vars.php';
  $wp_customize->add_section($home_section, array(
    'title' => 'Videos and News',
  ));

  $wp_customize->add_setting($home_top_vid, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_top_vid, array(
    'label' => 'Top Video Embed',
    'section' => $home_section,
  ));

  $wp_customize->add_setting($home_top_img);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $home_top_img,
    array(
      'label' => 'Top Image',
      'section' => $home_section
    )
  ));
  // Top Desc
  $wp_customize->add_setting($home_top_desc);
  $wp_customize->add_control($home_top_desc, array(
    'label' => 'Top Description',
    'section' => $home_section,
    'type' => 'textarea'
  ));
}
add_action('customize_register', 'home_customizer');

// Homepage customizer
function homepage_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($homepage_section, array(
    'title' => 'Homepage Customizer',
  ));

  // About text
  $wp_customize->add_setting($homepage_about, array(
    'default' => "About this site"
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $homepage_about_control, array(
    'label' => 'About',
    'section' => $homepage_section,
    'settings' => $homepage_about
  )));
  // About image
  $wp_customize->add_setting($homepage_about_image);
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
    $wp_customize,
    $homepage_about_image_control,
    array(
      'label' => 'About Image',
      'section' => $homepage_section,
      'settings' => $homepage_about_image,
      'width' => 800,
      'height' => 600
    )
  ));

  $wp_customize->add_setting($instrument_repeater, array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $instrument_repeater,
      array(
        'label'     => esc_html__('Update instruments'),
        'description'   => 'Add or remove instruments from the list on the homepage.',
        'section'       => $homepage_section,
        'live_title_id' => 'instrument',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 10, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'instrument'  => array(
            'title' => esc_html__('Instrument Name'),
            'type'  => 'text',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'homepage_customizer');

// Jumbotron customizer
function jumbotron_customizer($wp_customize)
{
  require 'section_vars.php';

  $wp_customize->add_section($jumbotron_section, array(
    'title' => 'Jumbotron',
  ));

  $wp_customize->add_setting($jumbotron_headline, array(
    'default' => 'Headline placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $jumbotron_headline_control, array(
    'label' => 'Headline',
    'section' => $jumbotron_section,
    'settings' => $jumbotron_headline
  )));

  $wp_customize->add_setting($jumbotron_subheading, array(
    'default' => 'Subheading placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $jumbotron_subheading_control, array(
    'label' => 'Subheading',
    'section' => $jumbotron_section,
    'settings' => $jumbotron_subheading
  )));
}
add_action('customize_register', 'jumbotron_customizer');

// Header banner customizer
function header_banner_customizer($wp_customize)
{
  require 'section_vars.php';

  $wp_customize->add_section($header_banner_section, array(
    'title' => 'Header Banner',
  ));

  $wp_customize->add_setting($header_banner_phonenumber, array(
    'default' => 'Phone number placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $header_banner_phonenumber_control, array(
    'label' => 'Phone number',
    'section' => $header_banner_section,
    'settings' => $header_banner_phonenumber
  )));

  $wp_customize->add_setting($header_banner_email, array(
    'default' => 'Email placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $header_banner_email_control, array(
    'label' => 'Email',
    'section' => $header_banner_section,
    'settings' => $header_banner_email
  )));

  $wp_customize->add_setting($header_banner_message, array(
    'default' => 'Message placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $header_banner_message_control, array(
    'label' => 'Message',
    'section' => $header_banner_section,
    'settings' => $header_banner_message
  )));
}
add_action('customize_register', 'header_banner_customizer');

// Photogallery
function photogallery_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  // wp_customize lets us add sections to the customize menu
  // in the dashboard. 
  //
  // $wp_customize->add_section() takes two parameters. The first
  // is the variable name for the section we want to add. The second
  // is an array with a few additional options
  $wp_customize->add_section($photogallery_section, array(

    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Photo Gallery',
  ));

  // This is where data will be stored in the database for a field
  //
  // $wp_customize->add_setting() takes two parameters. The first is
  // the variable name that we want to call this setting. The second
  // is an array with more options.
  $wp_customize->add_setting(
    $photogallery_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  // This is the text box that users will see and type text into
  //
  // $wp_customize->add_control() takes a newly constructed object of some class.
  // We are interested in WP_Customize_Control and 
  // Onepress_Customize_Repeatable_Control
  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $photogallery_repeater,
      array(
        'label'     => esc_html__('Update photo gallery'),
        'description'   => 'Add or remove images from the photo gallery.',
        'section'       => $photogallery_section,
        'live_title_id' => 'label',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 12, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'label'  => array(
            'title' => esc_html__('Label'),
            'type'  => 'text',
          ),
          'image'  => array(
            'title' => esc_html__('Image'),
            'type'  => 'media',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'photogallery_repeatable_customizer');

// Videos page customizer
function videos_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($videos_section, array(

    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Videos',
  ));

  $wp_customize->add_setting(
    $videos_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $videos_repeater,
      array(
        'label'     => esc_html__('Update videos gallery'),
        'description'   => 'Add or remove videos from the videos page and add a title and description.',
        'section'       => $videos_section,
        'live_title_id' => 'title',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 20, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'title'  => array(
            'title' => esc_html__('Video Title'),
            'type'  => 'text',
          ),
          'description'  => array(
            'title' => esc_html__('Video Description'),
            'type'  => 'text',
          ),
          'video'  => array(
            'title' => esc_html__('Video'),
            'type'  => 'media',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'videos_repeatable_customizer');
