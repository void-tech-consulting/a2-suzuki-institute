<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<div class="page-container">
  <div class="page-content-container">

  <!-- Buttons -->


  <!-- About -->


  <!-- Photo gallery -->
  <header>Photo Gallery</header>
  <div class="photoGalrow">
        <div class="photoGalcolumn">
          <img src= "photos/unnamed-6.jpg">
          <img src= "photos/unnamed-5.jpg"> 
          <img src="photos/unnamed-4.jpg">
        </div>
        
        <div class="photoGalcolumn">
          <img src="unnamed-2.jpg">
          <img src="unnamed-1.jpg">
        </div>
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
