<?php get_header(); ?>

<main role="main" id="main-content">
    <?php
    get_template_part('partials/front-page/section', 'media');
    get_template_part('partials/front-page/section', 'programmation');
    get_template_part('partials/front-page/section', 'about');
    get_template_part('partials/front-page/section', 'last-blog-posts');
    ?>
</main>

<?php get_footer(); ?>