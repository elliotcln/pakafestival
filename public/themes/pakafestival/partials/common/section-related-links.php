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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>

                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>