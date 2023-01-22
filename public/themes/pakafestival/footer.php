<footer role="contentinfo" class="site-footer">
    <hr>
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => 'nav',
            'container_class' => 'site-footer__nav',
            'container_aria_label' => 'Liens complémentaires'
        ));
        ?>
        <p class="site-footer__copyright"><?= date('Y') . ' - ' . get_bloginfo('name'); ?> - Tous droits réservés</p>
    </div>
</footer>

<?php get_template_part('partials/svg-sprites'); ?>

<?php wp_footer(); ?>
</body>

</html>