<?php require get_template_directory() . '/inc/section_vars.php'; ?>
<div class="footer-container">
    <a href="<?php echo get_theme_mod($company_link_facebook); ?>" target="_blank">
        <ion-icon name="logo-facebook" size="large"></ion-icon>
    </a>
    <div class="footer-section">
        <p class="text-thin-main"><?php echo get_theme_mod($company_information_phone) ?></p>
        <p class="text-thin-main"><?php echo get_theme_mod($company_information_email) ?></p>
    </div>
</div>
</div>
</div>

<?php wp_footer(); ?>

</body>

</html>