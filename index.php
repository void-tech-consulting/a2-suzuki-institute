<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<div class="page-container">
  <div class="page-content-container">

  <!-- Buttons -->


  <!-- About -->


  <!-- Photo gallery -->
  <div class = "photo-gal-header">
    Photo Gallery
  </div>
  <div class="photo-gallery-container">
      <img src= "photos/unnamed-6.jpg">
      <img src= "photos/unnamed-5.jpg"> 
      <img src="unnamed-2.jpg">
      <img src="unnamed-1.jpg">
      <img src="photos/unnamed-4.jpg">   
  </div>

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
