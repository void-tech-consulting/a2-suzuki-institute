<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="home-jumbotron-content">
  <span class="secondary-header-text shadow-hard">Excellent Music Instruction</span>
  <p class="shadow-hard">Serving the Ann Arbor, Michigan area for over 45 years</p>
  <div class="vertical-spacer"></div>
  <button>Contact</button>
  <div class="vertical-spacer"></div>
  <div class="vertical-spacer"></div>
</div>

<div class="page-container">
  <div class="page-content-container">

    <!-- About -->
    <div class="page-section">
      <div class="page-section-side">
        <img src="<?php echo get_bloginfo('template_url') ?>/images/students-1.jpg" />
      </div>
      <div class="page-section-side">
        <h2>About</h2>
        <p>The mission of the Ann Arbor Suzuki Institute is to provide excellent music instruction for children using the <a href="https://en.wikipedia.org/wiki/Suzuki_method">Suzuki Method</a> in a complete way: using teachers with SAA registered teacher training, who offer individual instruction, group classes, support for parents and participate in ongoing teacher development and renewal.</p>
        <div class="vertical-spacer"></div>
        <button class="btn-outline">Meet our teachers</button>
      </div>
    </div>

    <div class="instrument-list-container">
      <hr>
      <div class="instrument-list">
        <p>Violin</p>
        <p>Viola</p>
        <p>Cello</p>
        <p>Bass</p>
        <p>Guitar</p>
      </div>
      <hr>
    </div>

    <div class="page-section">
      <div class="page-section-side">
        <h2>Learning great technique, musicianship, and character from the start</h2>
        <p>Watch the progress of a 5 year old student in Suzuki Guitar. We offer age appropriate classes for students that teach good technique from the very beginning. </p>
        <div class="vertical-spacer"></div>
        <button class="btn-outline">See all videos</button>
      </div>
      <div class="page-section-side">
        <img src="<?php echo get_bloginfo('template_url') ?>/images/video-thumbnail.png" />
      </div>
    </div>

    <!-- Photo gallery -->

    <!-- Buttons -->

    <!-- Testimonial -->
    
  </div>
</div>

<?php get_footer(); ?>