<?php /* Template Name: videos */ ?>
<?php get_header(); ?>
<div class="page-container">
    <div class="page-content-container">
        <h2 class="page-header-text">Videos</h2>

        <div class="page-section vertical-stack">

            <?php
            require 'inc/section_vars.php';
            // get_example_data is in /inc/template_functions.php
            $data = get_videos_data($videos_repeater);
            if (!empty($data)) {
                foreach ($data as $k => $f) { ?>
                    <div class="section-row">
                        <div class="video-text">
                            <h3><?php echo $f['title'] ?></h3>
                            <p><?php echo $f['description'] ?></p>
                        </div>
                        <iframe class="embedded-video" src="<?php echo $f['video_src']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>

                <?php } ?>
            <?php } else { ?>
                <div class="section-row">
                    <p>No videos found</p>
                </div>
            <?php } ?>
        </div>

        <?php
        get_footer();
        ?>