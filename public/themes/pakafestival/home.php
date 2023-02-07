<?php get_header();
$posttype_class = 'single-' . get_post_type(); ?>

<main role="main" id="main-content">
    <article class="<?= $posttype_class; ?>">
        <header class="<?= $posttype_class . '__header'; ?>">
            <div class="container grid">
                <div class="grid-span--5 offset-2">
                    <?php the_breadcrumb(get_option('page_for_posts')); ?>
                    <div class="post-infos__container">
                        <h1><?= get_the_title(get_option('page_for_posts')); ?></h1>
                    </div>
                </div>
            </div>
        </header>
        <section class="<?= $posttype_class . '__content'; ?> section-last-blog-posts">
            <div class="container grid">
                <div class="grid-span--8 offset-2">
                    <?php
                    $posts = get_posts();
                    if ($posts) : ?>
                        <ul class="last-posts__list">
                            <?php foreach ($posts as $post) :  setup_postdata($post); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                        <div>
                                            <span><?= get_the_date('d/m/Y'); ?></span>
                                            <h2><?= get_the_title(); ?></h2>
                                            <?= the_excerpt(); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php
                    endif; ?>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>