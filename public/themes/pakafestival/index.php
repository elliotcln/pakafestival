<?php get_header(); ?>

<main role="main" id="main-content">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            // get post type template content
            get_template_part('partials/content', get_post_type());
        }
    } ?>

    <?php
    get_template_part('partials/common/section', 'related-links');
    get_template_part('partials/common/section', 'partners');
    ?>
</main>

<?php get_footer(); ?>