<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?></title>

  <!-- Icon CDN -->
  <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>

  <!-- jQuery CDN-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<?php require get_template_directory() . '/inc/section_vars.php'; ?>

<body <?php body_class(); ?>>
  <!-- Example navbar -->
  <div class="header-container">

    <!-- background image -->
    <div class="header-background">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/jumbotron-background.png" />
    </div>

    <!-- Contact Info / Alert message -->
    <div class="header-banner">
      <div class="header-banner-left">
        <span class="text-thin-main">
          <?php echo get_theme_mod($header_banner_phonenumber) ?>
        </span>
        <span class="text-thin-main">
          <?php echo get_theme_mod($header_banner_email) ?>
        </span>
      </div>

      <span class="text-thin-main hide-on-tablet-width">
        <?php echo get_theme_mod($header_banner_message) ?>
      </span>
    </div>

    <!-- Title / Nav -->

    <div class="header-main">
      <a class="header-main-left" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>

      <nav class="site-nav">
        <div class="menu-wrapper">
          <?php
          $args = array(
            "theme_location" => "primary",
            "container" => "ul",
            "menu_class" => "nav-links"
          );
          wp_nav_menu($args);
          ?>
        </div>

        <ion-icon class="menu-toggle" name="menu-outline" size="large"></ion-icon>
      </nav>
    </div>
  </div>