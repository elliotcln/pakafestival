<section aria-label="Liens relatifs" class="related-links">
    <div class="container">
        <?php
        $ids = [12, 14, 16, 18];
        $relatedLinks = new WP_Query([
            'post_type' => 'page',
            'post__in' => $ids
        ]);

        $slug = get_post_field('post_name', $post_id);

        if ($relatedLinks->have_posts()) :
        ?>
            <ul>
                <?php while ($relatedLinks->have_posts()) : $relatedLinks->the_post(); ?>
                    <li>
                        <a href="<?= the_permalink(); ?>" <?= $slug === basename(get_permalink()) ? 'aria-current="page"' : null; ?>>
                            <span><?= the_title(); ?></span>
                            <svg class="icon" aria-hidden="true">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>