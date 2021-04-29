<?php /* Template Name: newsletter */ ?>
<?php get_header(); ?>
<div class="page-container">
    <div class="page-content-container">
        <h2 class="page-header-text">Newsletter</h2>

        <div class="page-section vertical-stack newsletter">

            <?php
            // Newsletter posts go here
            $newsletterPosts = new WP_Query(('cat=3&posts_per_page=10&orderby=date&order=DESC'));

            if ($newsletterPosts->have_posts()) :

                while ($newsletterPosts->have_posts()) : $newsletterPosts->the_post(); ?>
                    <div class="newsletter-post">
                        <h3><?php the_title(); ?></h3>
                        <p class="newsletter-date"><?php the_time('F jS, Y'); ?></p>
                        <?php the_content(); ?>
                    </div>
            <?php endwhile;

            else :
                echo '<p>No content found</p>';
            endif;
            wp_reset_postdata();

            ?>
        </div>
        <?php
        get_footer();
        ?>