<?php /* Template Name: contact */ ?>
<?php
get_header();
?>
<?php require get_template_directory() . '/inc/section_vars.php'; ?>

<div class="page-container">
  <div class="page-content-container">
    <h2 class="page-header-text">Contact</h2>

    <div class="page-section">
      <div class="contact-form-container">
        <?php
        $shortcode = get_theme_mod($contact_form_shortcode);
        echo do_shortcode($shortcode);
        ?>
      </div>

      <div class="contact-message-container">
        <h2 style="text-align: center"><?php echo get_theme_mod($contact_headline) ?></h2>
        <p style="text-align: center; width: 72%"><?php echo get_theme_mod($contact_desc) ?></p>
        <br>
        <p style="text-align: center"><?php echo get_theme_mod($company_information_phone); ?></p>
        <p style="text-align: center"><?php echo get_theme_mod($company_information_email); ?></p>
      </div>

    </div>

    <?php
    get_footer();
    ?>