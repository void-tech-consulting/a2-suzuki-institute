<?php

/*************************************
  Menu Registration
 **************************************/
register_nav_menu("primary", "Top Navbar");

/*************************************
  Company Information customizer
 **************************************/
function company_information_customizer($wp_customize)
{
  require 'section_vars.php';

  $wp_customize->add_section($company_information_section, array(
    'title' => 'Company Information',
  ));

  // Phone number
  $wp_customize->add_setting($company_information_phone, array(
    'default' => 'Phone number placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_information_phone_control, array(
    'label' => 'Phone number',
    'section' => $company_information_section,
    'settings' => $company_information_phone
  )));

  // Email
  $wp_customize->add_setting($company_information_email, array(
    'default' => 'Email placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_information_email_control, array(
    'label' => 'Email',
    'section' => $company_information_section,
    'settings' => $company_information_email
  )));

  // Primary message
  $wp_customize->add_setting($company_information_message, array(
    'default' => 'Message placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_information_message_control, array(
    'label' => 'Message',
    'section' => $company_information_section,
    'settings' => $company_information_message
  )));

  // Facebook
  $wp_customize->add_setting($company_link_facebook, array(
    'default' => 'https://www.facebook.com'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_link_facebook_control, array(
    'label' => 'Link to Facebook page (i.e., https://facebook.com)',
    'section' => $company_information_section,
    'settings' => $company_link_facebook
  )));
}
add_action('customize_register', 'company_information_customizer');


/*************************************
  Homepage customizer
 **************************************/
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
  $wp_customize->add_control($homepage_about, array(
    'label' => 'About Section (Description)',
    'section' => $homepage_section,
    'type' => 'textarea'
  ));

  // About image
  $wp_customize->add_setting($homepage_about_image);
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
    $wp_customize,
    $homepage_about_image_control,
    array(
      'label' => 'About Section (Image)',
      'section' => $homepage_section,
      'settings' => $homepage_about_image,
      'width' => 800,
      'height' => 600
    )
  ));

  // Instruments list
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

  // Homepage videos headline
  $wp_customize->add_setting($homepage_videos_headline, array(
    'default' => "Videos headline"
  ));
  $wp_customize->add_control($homepage_videos_headline, array(
    'label' => 'Videos Section (Headline)',
    'section' => $homepage_section,
    'type' => 'textarea'
  ));

  // Homepage videos description
  $wp_customize->add_setting($homepage_videos_description, array(
    'default' => "Videos description"
  ));
  $wp_customize->add_control($homepage_videos_description, array(
    'label' => 'Videos Section (Description)',
    'section' => $homepage_section,
    'type' => 'textarea'
  ));

  // Homepage videos video
  $wp_customize->add_setting($homepage_videos_video, array(
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control($homepage_videos_video, array(
    'label' => 'Videos Section (Video Source)',
    'section' => $homepage_section,
  ));
}
add_action('customize_register', 'homepage_customizer');

/*************************************
  Jumbotron customizer
 **************************************/
function jumbotron_customizer($wp_customize)
{
  require 'section_vars.php';

  $wp_customize->add_section($jumbotron_section, array(
    'title' => 'Homepage: Jumbotron',
  ));

  // Jumbotron headline
  $wp_customize->add_setting($jumbotron_headline, array(
    'default' => 'Headline placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $jumbotron_headline_control, array(
    'label' => 'Headline',
    'section' => $jumbotron_section,
    'settings' => $jumbotron_headline
  )));

  // Jumbotron subheading
  $wp_customize->add_setting($jumbotron_subheading, array(
    'default' => 'Subheading placeholder'
  ));
  $wp_customize->add_control($jumbotron_subheading, array(
    'label' => 'Subheading',
    'section' => $jumbotron_section,
    'type' => 'textarea'
  ));

  // Jumbotron image
  $wp_customize->add_setting($jumbotron_background_image);
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
    $wp_customize,
    $jumbotron_background_image_control,
    array(
      'label' => 'Background Image',
      'section' => $jumbotron_section,
      'settings' => $jumbotron_background_image,
      'width' =>  1441,
      'height' => 540
    )
  ));
}
add_action('customize_register', 'jumbotron_customizer');

/*************************************
  Testimonials customizer
 **************************************/
function testimonials_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($homepage_section_testimonials, array(

    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Homepage: Testimonials',
  ));

  $wp_customize->add_setting(
    $testimonials_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $testimonials_repeater,
      array(
        'label'     => esc_html__('Update testimonials'),
        'description'   => 'Add, update, or remove testimonials from the home page.',
        'section'       => $homepage_section_testimonials,
        'live_title_id' => 'person_name',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 20, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'text_content'  => array(
            'title' => esc_html__('Testimonial Quote'),
            'type'  => 'textarea',
          ),
          'person_name'  => array(
            'title' => esc_html__('Person Name'),
            'type'  => 'text',
          )
        ),
      )
    )
  );
}
add_action('customize_register', 'testimonials_customizer');

/*************************************
  Photogallery customizer
 **************************************/
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
    'title' => 'Homepage: Photo Gallery',
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

/*************************************
  Videos page customizer
 **************************************/
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
            'type'  => 'textarea',
          ),
          'video_src'  => array(
            'title' => esc_html__('Video Embed URL'),
            'type'  => 'text',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'videos_repeatable_customizer');

/*************************************
  Teachers page customizer
 **************************************/
function teachers_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($teachers_section, array(

    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Teachers',
  ));

  $wp_customize->add_setting(
    $teachers_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $teachers_repeater,
      array(
        'label'     => esc_html__('Update faculty information'),
        'description'   => 'Modify list of current faculty members, faculty positions, and faculty bios.',
        'section'       => $teachers_section,
        'live_title_id' => 'name',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 30, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max teachers added')),
        'fields'    => array(
          'photo'  => array(
            'title' => esc_html__('Teacher Photo'),
            'type'  => 'media',
          ),
          'name'  => array(
            'title' => esc_html__('Teacher Name'),
            'type'  => 'text',
          ),
          'job'  => array(
            'title' => esc_html__('Job'),
            'type'  => 'text',
          ),
          'bio'  => array(
            'title' => esc_html__('Bio'),
            'type'  => 'text',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'teachers_repeatable_customizer');

/*************************************
  Teachers page customizer
 **************************************/
function events_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';
  $wp_customize->add_section($events_section, array(
    // This is the name of the section that will visually display in 
    // the admin panel
    'title' => 'Events',
  ));
  $wp_customize->add_setting(
    $events_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );
  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $events_repeater,
      array(
        'label'     => esc_html__('Update events gallery'),
        'description'   => 'Add or remove events from the events page and add a title, date, location, and description.',
        'section'       => $events_section,
        'live_title_id' => 'title',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 20, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'title'  => array(
            'title' => esc_html__('Event Title'),
            'type'  => 'text',
          ),
          'location'  => array(
            'title' => esc_html__('Location (place/time)'),
            'type'  => 'text',
          ),
          'description'  => array(
            'title' => esc_html__('Event Description'),
            'type'  => 'text',
          ),
          'month'  => array(
            'title' => esc_html__('Month'),
            'type'  => 'text',
          ),
          'day'  => array(
            'title' => esc_html__('Day'),
            'type'  => 'text',
          ),
          'date'  => array(
            'title' => esc_html__('Date #'),
            'type'  => 'text',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'events_repeatable_customizer');

/*************************************
  Contact page customizer
 **************************************/
function contact_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($contact_section, array(
    'title' => 'Contact',
  ));

  // Headline text
  $wp_customize->add_setting($contact_headline, array(
    'default' => "Contact us!"
  ));
  $wp_customize->add_control($contact_headline, array(
    'label' => 'Contact headline',
    'section' => $contact_section,
    'type' => 'textarea'
  ));

  // Description text
  $wp_customize->add_setting($contact_desc, array(
    'default' => "Call and leave a message or send an email to get more information."
  ));
  $wp_customize->add_control($contact_desc, array(
    'label' => 'Contact description',
    'section' => $contact_section,
    'type' => 'textarea'
  ));

  // Shortcode for form
  $wp_customize->add_setting($contact_form_shortcode, array(
    'default' => "[shortcode goes here]"
  ));
  $wp_customize->add_control($contact_form_shortcode, array(
    'label' => 'Contact form shortcode',
    'section' => $contact_section,
    'type' => 'textarea'
  ));
}
add_action('customize_register', 'contact_customizer');
