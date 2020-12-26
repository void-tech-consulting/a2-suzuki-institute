<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<h1>Home</h1>




<!-- Photo gallery -->
<header>Photo Gallery</header>
<div class="row">
        <div class="column">
          <img src= "img1.png">
          <img src= "img2.png"> 
          <img src="img3.png">
        </div>
        
        <div class="column">
          <img src="img4.png">
          <img src="img5.png">
          <img src="">
        </div>
      </div>


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
