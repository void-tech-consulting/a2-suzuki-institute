<?php

function add_scripts()
{
  wp_enqueue_script(
    "ajax-script",
    get_theme_file_uri("/js/mobile-menu.js"),
    array('jquery'),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_scripts');

function my_ajax_handler__json()
{
  check_ajax_referer('title_example');
  wp_insert_post(array(
    'post_title'  => $_POST['title'],
    'post_type'  => 'example-type',
    'post_content' => $_POST['title'],
    'post_status' => 'pending',
  ));
  // return response json
  $return = array(
    'message'  => 'Saved',
  );
  wp_send_json_success($return, 200);
}
add_action('wp_ajax_nopriv_my_tag_count', 'my_ajax_handler__json');

function add_styles()
{
  wp_enqueue_style("style", get_stylesheet_uri());
  wp_enqueue_style("home", get_theme_file_uri('/css/home.css'));
}
add_action('wp_enqueue_scripts', 'add_styles');
