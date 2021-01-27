<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<div class="page-container">
  <div class="page-content-container">

  <!-- Buttons -->


  <!-- About -->


  <!-- Photo gallery -->


  <!-- Testimonial -->
  <h1 class= "header"> 
  Testimonials
  </h1>
<section class = "page-section"> 
  <div class= "testimonial-box">
    <img class="quote" src="<?php echo get_template_directory_uri();?>/quote.png" alt="Quote">
    <p class= "testimonial-text">
    “Lorem ipsum dolor sit amet,
    consectetur adipiscing elit.
    Phasellus euismod semper dolor, a
    hendrerit odio placerat nec. Nunc
    massa massa, faucibus congue
    massa commodo, sodales pretium
    tellus. “
    </p>
    <h1 class= "testimonial-parent"> -Parent </h1>
  </div>
  <div class= "testimonial-box">
    <img class="quote" src="<?php echo get_template_directory_uri();?>/quote.png" alt="Quote">
    <p class= "testimonial-text">
    “Lorem ipsum dolor sit amet,
    consectetur adipiscing elit.
    Phasellus euismod semper dolor, a
    hendrerit odio placerat nec. Nunc
    massa massa, faucibus congue
    massa commodo, sodales pretium
    tellus. “
    </p>
    <h1 class= "testimonial-parent"> -Parent </h1>
  </div>
  <div class= "testimonial-box">
    <img class="quote" src="<?php echo get_template_directory_uri();?>/quote.png" alt="Quote">
    <p class= "testimonial-text">
    “Lorem ipsum dolor sit amet,
    consectetur adipiscing elit.
    Phasellus euismod semper dolor, a
    hendrerit odio placerat nec. Nunc
    massa massa, faucibus congue
    massa commodo, sodales pretium
    tellus. “
    </p>
    <h1 class= "testimonial-parent"> -Parent </h1>
  </div>
</section>

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
