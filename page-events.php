<?php /* Template Name: events */ ?>
<?php get_header(); ?>
<div class="page-container">
    <div class="page-content-container">
        <h2 class="page-header-text">Events</h2>

        <div class="page-section vertical-stack">

            
            <div class="event-row">
                <div class="event-responsive-row">
                    <div class="event-box">

                        <div class="rectangle-1">
                            <p class="month-text">January</p>
                            <div class="rectangle-2">
                                <div class="rectangle-3-row">
                                    <div class="rectangle-3-column">
                                        <p class="day-text">Tuesday</p>
                                        <p class="day-text">19</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="event-info">
                        <p class="event-title-text">Name/Title</p>
                        <p class="event-normal-text">Location (place/time)</p>
                        <br>
                        <p class=event-normal-text">Description blurb for the performance,
                            workshop, or whatever the event is.</p>
                    </div>

                </div>
            </div>
        </div>

        <?php
        get_footer();
        ?>

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