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
                    <div class="section-row">

                        <div class="teacher-profile-wrapper">
                            <?php
                            $media = '<img src="' . esc_url(get_media_url($f['photo'])) . '" class="teacher-profile-pic" />';
                            echo $media;
                            ?>
                        </div>


                        <div class="teacher-text">
                            <h3><?php echo $f['name'] ?></h3>
                            <h4><?php echo $f['job'] ?></h4>
                            <p><?php echo $f['bio'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="section-row">
                    <p>No teachers have been added</p>
                </div>
            <?php } ?>
        </div>
        <?php
        get_footer();
        ?>