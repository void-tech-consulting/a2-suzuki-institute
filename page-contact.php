<?php /* Template Name: contact */ ?>
<?php
get_header();
?>

<div class="page-container">
  <div class="page-content-container">
    <h2 class="page-header-text">Contact</h2>

    <div class="page-section">
      <div class="contact-form-container">
        <?php echo do_shortcode("[forminator_form id='96']"); ?>
      </div>

      <div class="contact-message-container">
        <h2 style="text-align: center">We'd love to hear from you!</h2>
        <p style="text-align: center; width: 72%">Call and leave a message or send an email to schedule lessons and get more information.</p>
        <br>
        <p style="text-align: center">(734) 726-0171</p>
        <p style="text-align: center">annarborsuzuki@gmail.com</p>
      </div>

    </div>

    <?php
    get_footer();
    ?>