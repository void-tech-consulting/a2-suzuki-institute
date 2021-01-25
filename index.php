<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<div class="home-jumbotron-content">
  <span class="secondary-header-text shadow-hard">Excellent Music Instruction</span>
  <p class="shadow-hard">Serving the Ann Arbor, Michigan area for over 45 years</p>
  <div class="vertical-spacer"></div>
  <button>Contact</button>
  <div class="vertical-spacer"></div>
  <div class="vertical-spacer"></div>
</div>

<div class="page-container" style="top: 580px">
  <div class="page-content-container">

    <!-- About -->
    <p class="page-header-text">About</p>

    <!-- Photo gallery -->

    <!-- Buttons -->

    <!-- Testimonial -->

  </div>
</div>

<!-- Ignore everything below -->

<!-- <?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?> -->

<?php get_footer(); ?>