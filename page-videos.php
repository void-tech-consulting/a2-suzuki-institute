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
            ?>
            <?php foreach ($data as $k => $f) {
                    echo '<div class="video-row">';
                    echo '<div class="video-text">';
                    $video_title = '<h3>' . $f['title'] . '</h3>';
                    $video_desc = '<p>' . $f['description'] . '</p>';
                    echo $video_title;
                    echo $video_desc;
                    echo '</div>';

                    echo '<div class="video-thumbnail">';
                    $video = '<video width="320" height="240" controls>
                                        <source src="' . esc_url(get_media_url($f['video'])) .
                        '" type=video/mp4> </video>';
                    echo $video;
                    echo '</div>';

                    echo '</div>';

                    $media = '<img src="' . esc_url(get_media_url($f['image'])) . '" alt="' . $image_alt . '">';
                }
            }
            ?>
        </div>

        <?php
        get_footer();
        ?>