<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<div class="page-container">
  <div class="page-content-container">

    <!-- About -->


    <!-- Photo gallery -->
    
  <!-- Buttons -->
  <button> button </button>
  <button class = "btn-outline">btn</button>
  
    <!-- Testimonial -->

    <!-- Contact Page/Form -->

    <div class="page-contact-container">

      <p class="contact-contact-text">Contact</p>
      <hr>
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
          <h2 style="text-align: center">We'd love to hear from you!</h2>
          <p style="text-align: center; width: 72%">Call and leave a message or send an email
            to schedule lessons and get more information.</p>
          <br>
          <p style="text-align: center">(734) 726-0171</p>
          <p style="text-align: center">annarborsuzuki@gmail.com</p>
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