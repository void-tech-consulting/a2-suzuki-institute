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

    <!-- Instrument list -->
    <div class="page-section">
      <div class="instrument-list">
        <p>Violin</p>
        <p>Viola</p>
        <p>Cello</p>
        <p>Bass</p>
        <p>Guitar</p>
      </div>
    </div>

    <!-- Videos preview -->
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
    <!-- Photo gallery -->
    <div class="page-section vertical-stack">
      <h2>
        Photo Gallery
      </h2>
      <div class="photo-gallery-container">
        <img src= "<?php echo get_bloginfo('template_url') ?>/images/photog-1.jpg"> 
        <img src= "<?php echo get_bloginfo('template_url') ?>/images/photog-2.jpg"> 
        <img src= "<?php echo get_bloginfo('template_url') ?>/images/photog-3.jpg"> 
        <img src= "<?php echo get_bloginfo('template_url') ?>/images/photog-4.jpg"> 
        <img src= "<?php echo get_bloginfo('template_url') ?>/images/photog-5.jpg"> 
        <img src= "<?php echo get_bloginfo('template_url') ?>/images/photog-6.jpg"> 
      </div>
    </div>
    
    <!-- Testimonial -->
    <div class="page-section vertical-stack">
      <h2>
        Testimonials
      </h2>
      <div class="testimonials-container">
        <div class="testimonial-container">
          <img class="quote" src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="Quote">
          <p class="testimonial-text">
            “Lorem ipsum dolor sit amet,
            consectetur adipiscing elit.
            Phasellus euismod semper dolor, a
            hendrerit odio placerat nec. Nunc
            massa massa, faucibus congue
            massa commodo, sodales pretium
            tellus. “
          </p>
          <p class="testimonial-parent"> -Parent </p>
        </div>
        <div class="testimonial-container">
          <img class="quote" src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="Quote">
          <p class="testimonial-text">
            “Lorem ipsum dolor sit amet,
            consectetur adipiscing elit.
            Phasellus euismod semper dolor, a
            hendrerit odio placerat nec. Nunc
            massa massa, faucibus congue
            massa commodo, sodales pretium
            tellus. “
          </p>
          <p class="testimonial-parent"> -Parent </p>
        </div>
        <div class="testimonial-container">
          <img class="quote" src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="Quote">
          <p class="testimonial-text">
            “Lorem ipsum dolor sit amet,
            consectetur adipiscing elit.
            Phasellus euismod semper dolor, a
            hendrerit odio placerat nec. Nunc
            massa massa, faucibus congue
            massa commodo, sodales pretium
            tellus. “
          </p>
          <p class="testimonial-parent"> -Parent </p>
        </div>
      </div>
    </div>


    <div>
      <?php
      require 'inc/section_vars.php';
      // get_example_data is in /inc/template_functions.php
      $data  = get_example_data($example_repeater);
      if (!empty($data)) {
      ?>
        <section class="example">
          <?php
          foreach ($data as $k => $f) {
            // Make sure to use a semicolon; when using php on multiple lines
            $questionId = 'question' . $k;
            $answerContent = "<div id=\"" . $questionId . "\" class=\"answer-text\">";
          ?>
            <div class="questionbox" <?php echo "data-question-id=\"" . $k . "\"" ?>>
              <span class="question-text"><?php echo $f['question'] ?> </span>
            </div>
            <div class="dropdown-line"></div>
            <?php echo $answerContent ?>
            <a href="<?php echo $f['link']; ?>">
              <div class="answer-wrap">
                <?php echo $f['answer']; ?>
              </div>
            </a>
    </div>
  <?php
          }
  ?>
  </section>
<?php } ?>

  </div>

  <?php get_footer(); ?>