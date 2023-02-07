<?php
$posttype_class = 'single-' . get_post_type();
?>
<article class="<?= $posttype_class; ?>">
    <header class="<?= $posttype_class . '__header'; ?>">
        <div class="container grid">
            <div class="grid-span--8 offset-2">
                <?php the_breadcrumb(get_the_ID()); ?>
                <div class="post-infos__container">
                    <h1><?= get_the_title(); ?></h1>
                    <span class="single-post__metas">
                        Posté le <?= get_the_date('d/m/Y'); ?>
                    </span>
                </div>
            </div>
        </div>
    </header>
    <section class="<?= $posttype_class . '__content'; ?>">
        <div class="container grid">
            <div class="grid-span--8 offset-2 prose">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</article>