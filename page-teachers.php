<?php /* Template Name: teachers */ ?>
<?php get_header(); ?>
<div class="page-container">
    <div class="page-content-container">
        <h2 class="page-header-text">Teachers</h2>

        <div class="page-section vertical-stack">
            <?php
            require 'inc/section_vars.php';
            // get_example_data is in /inc/template_functions.php
            $data = get_teachers_data($teachers_repeater);
            if (!empty($data)) {
                foreach ($data as $k => $f) { ?>
                    <div class="teacher-row">

                        <?php
                        $media = '<img src="' . esc_url(get_media_url($f['photo'])) . '" class="teacher-profile-pic" />'
                        ?>
                        <?php echo $media ?>

                        <div class="teacher-text">
                            <h3><?php echo $f['name'] ?></h3>
                            <h4><?php echo $f['job'] ?></h4>
                            <p><?php echo $f['bio'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="teacher-row">
                    <p>No teachers have been added</p>
                </div>
            <?php } ?>




            <!-- <div class="teacher-row">

                <img src="<?php echo get_bloginfo('template_url') ?>/teacher-photos/MaryLou.png" class="teacher-profile-pic" />

                <div class="teacher-text">
                    <h3>MaryLou Roberts</h3>
                    <h4>Coordinator & Guitar Teacher</h4>
                    <p>MaryLou Roberts graduated with a Masters in Guitar Performance and prize money from the Cleveland Institute of Music, and studied with Gilbert Biberian and John Holmquist.  
                        During her studies at the Cleveland Institute of Music and the Baldwin-Wallace Conservatory, she taught guitar and music theory to Suzuki students and directed two guitar ensembles.  
                        She received her bachelor's degree in guitar performance from the Wisconsin Conservatory of Music and studied with John Holmquist.  
                        MaryLou is a member of the National Suzuki Guitar Committee and a registered guitar teacher trainer with the Suzuki Association of the Americas.  
                        She has conducted teacher training courses in Ann Arbor and festivals worldwide including the Hartt Suzuki Institute, the International Suzuki Guitar Festival in Califonia and festivals in Lima, Peru, Asuncion, Paraguay, Bogota, Colombia and the Suzuki Music Festival in Melbourne.  Australia. 
                         Marylou is the coordinator of the Ann Arbor Suzuki Institute of Music and has an active Suzuki guitar program.  MaryLou is also the director of the weeklong Ann Arbor Suzuki Guitar Institute, which hosts teachers and students from across North America. </p>
                </div>
            </div> -->
        </div>
        <?php
        get_footer();
        ?>