<?php
$posttype_class = 'single-' . get_post_type();
?>
<article class="<?= $posttype_class; ?>">
    <header class="<?= $posttype_class . '__header'; ?> <?= has_post_thumbnail() ? 'has-post-thumbnail' : null; ?>">
        <div class="container grid">
            <div class="grid-span--5 offset-2">
                <?php the_breadcrumb(get_the_ID()); ?>
                <div class="post-infos__container">
                    <h1><?= get_the_title(); ?></h1>
                </div>
            </div>
        </div>
    </header>
    <section class="<?= $posttype_class . '__content'; ?>">
        <div class="container grid">
            <div class="grid-span--8 offset-2 prose">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'post-thumbnail']); ?>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</article>