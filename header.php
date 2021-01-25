<!-- If you have a navbar or html on the top of every page put it here -->
<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ann Arbor Suzuki Institute</title>
</head>

<body>
  <!-- Example navbar -->
  <div id="header-container">

    <!-- background image -->
    <div id="header-background">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/jumbotron-background.png" />
    </div>

    <!-- Contact Info / Alert message -->
    <div id="header-banner">
      <span class="text-thin-main">
        <pre>(734) 726-0171    annarborsuzuki@gmail.com</pre>
      </span>
      <span class="text-thin-main">
        Online lessons available!
      </span>
    </div>

    <!-- Title / Nav -->
    
    <div id="header-main">
      <span id="header-main-left">Ann Arbor Suzuki Institute</span>
      <div id="header-main-right">
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