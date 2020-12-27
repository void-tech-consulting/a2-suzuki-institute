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

      <p class="contact-contact-text">Contact</p>
      <hr class="contact-horizontal-bar">
      </hr>

      <div class="contact-boxes">
        <div class="contact-fields">
          <label for="name" class="contact-text">Name</label>
          <br>
          <input class="contact-input-box" type="text" id="name" name="name" placeholder="Enter your name">
          <br>
          <label for="emailPhone" class="contact-text">Email / Phone</label>
          <br>
          <input class="contact-input-box" type="text" id="emailPhone" name="emailPhone" placeholder="Enter your email address or phone">
          <br>
          <label for="message" class="contact-text">Message</label>
          <br>
          <input class="contact-input-box" style="height: 200px; padding-top: 10px; padding-right: 143px; padding-bottom: 154px" type="text" id="message" name="message" placeholder="Enter a message">
          <br>
        </div>

        <div class="contact-message-container">
          <div class="contact-message">
            <p class="contact-loveHear-heading-text">We'd love to hear from you!</p>
          </div>
        </div>
      </div>
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