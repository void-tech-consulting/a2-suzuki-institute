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
                    <div class="video-row">
                        <div class="video-text">
                            <h3><?php echo $f['title'] ?></h3>
                            <p><?php echo $f['description'] ?></p>
                        </div>
                        <div class="video-thumbnail">
                            <video width="320" height="240" controls>
                                <?php
                                $media = '<source src="' . esc_url(get_media_url($f['video'])) . '" type=video/mp4> </video>';
                                ?>
                                <?php echo $media ?>
                        </div>
                    </div>

                <?php } ?>
            <?php } else { ?>
                <div class="video-row">
                    <p>No videos have been uploaded</p>
                </div>
            <?php } ?>
        </div>

        <?php
        get_footer();
        ?>