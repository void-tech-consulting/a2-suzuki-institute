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

    <!-- Contact Page/Form -->

    <div class="page-contact-container">

      <p class="contact-contact">Contact</p>
      <hr class="contact-horizontal-bar">
      
      <label for="name" class="contact-text">Name</label>
      <br>
      <input class="contact-input-box" type="text" id="name" name="name" placeholder="    Enter your name">
      </hr>

    </div>

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