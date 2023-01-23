<section class="section-last-blog-posts" aria-labelledby="section-last-blog-posts__title">
    <div class="container">
        <div class="grid">
            <div class="grid-span--4">
                <h2 id="section-last-blog-posts__title">Nos derniers posts</h2>
                <p>Vous voulez en apprendre plus sur le comment du pourquoi, les guests, nos engagements, un peu tout quoi ... ?</p>
                <a href="<?= get_permalink(get_option('page_for_posts')); ?>" class="button button--secondary">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#chat"></use>
                    </svg>
                    <span>Voir la page du blog</span>
                </a>
            </div>
            <div class="grid-span--5 offset-5">
                <?php
                $last_posts = get_posts([
                    'numberposts' => 3
                ]);

                if ($last_posts) :
                ?>
                    <ul class="last-posts__list">
                        <?php foreach ($last_posts as $post) : ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                    <div>
                                        <span><?= get_the_date('d/m/Y'); ?></span>
                                        <h3><?= get_the_title(); ?></h3>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>