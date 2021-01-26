<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name')?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Example navbar -->
  <div class="header-container">

    <!-- background image -->
    <div class="header-background">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/jumbotron-background.png" />
    </div>

    <!-- Contact Info / Alert message -->
    <div class="header-banner">
      <span class="text-thin-main">
        <pre>(734) 726-0171    annarborsuzuki@gmail.com</pre>
      </span>
      <span class="text-thin-main">
        Online lessons available!
      </span>
    </div>

    <!-- Title / Nav -->
    
    <div class="header-main">
      <a class="header-main-left" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      <div class="header-main-right">
        <?php
        $args = array(
          "theme_location" => "primary",
          "container" => "ul",
          "menu_class" => "nav-links"
        );
        wp_nav_menu($args);
        ?>
      </div>
    </div>
  </div>