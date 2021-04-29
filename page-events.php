<?php /* Template Name: events */ ?>
<?php get_header(); ?>
<div class="page-container">
    <div class="page-content-container">
        <h2 class="page-header-text">Events</h2>

        <div class="page-section vertical-stack">

            <?php
            require 'inc/section_vars.php';
            // get_example_data is in /inc/template_functions.php
            $data = get_events_data($events_repeater);
            if (!empty($data)) {
                foreach ($data as $k => $f) { ?>
                    <div class="section-row">
                        <div class="event-responsive-row">
                            <div class="event-box">
                                <div class="rectangle-1">
                                    <p class="month-text"><?php echo $f['month'] ?></p>
                                    <div class="rectangle-2">
                                        <div class="rectangle-3-row">
                                            <div class="rectangle-3-column">
                                                <p class="day-text"><?php echo $f['day'] ?></p>
                                                <p class="day-text"><?php echo $f['date'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event-info">
                                <p class="event-title-text"><?php echo $f['title'] ?></p>
                                <p class="event-normal-text"><?php echo $f['location'] ?></p>
                                <br>
                                <p class="event-normal-text"><?php echo $f['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="event-row">
                    <p>No events have been created</p>
                </div>
            <?php } ?>
        </div>

        <?php
        get_footer();
        ?>