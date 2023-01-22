<section class="section-about" aria-labelledby="section-about__title">
    <div class="container">
        <h2 id="section-about__title" class="sr-only">Informations sur le festival</h2>
        <div class="grid">
            <?php if (get_field('about_what')) : ?>
                <article class="grid-span--5">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#ticket"></use>
                    </svg>
                    <h3><?= get_field('about_what'); ?></h3>
                    <p><?= get_field('about_what__desc'); ?></p>
                </article>
            <?php endif; ?>
            <?php if (get_field('about_music')) : ?>
                <article class="grid-span--5 offset-6">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#music"></use>
                    </svg>
                    <h3><?= get_field('about_music'); ?></h3>
                    <p><?= get_field('about_music__desc'); ?></p>
                </article>
            <?php endif; ?>
            <?php if (get_field('about_when')) : ?>
                <article class="grid-span--5">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#sun"></use>
                    </svg>
                    <h3><?= get_field('about_when'); ?></h3>
                    <p><?= get_field('about_when__desc'); ?></p>
                </article>
            <?php endif; ?>
            <?php if (get_field('about_where')) : ?>
                <article class="grid-span--5 offset-6">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#map"></use>
                    </svg>
                    <h3><?= get_field('about_where'); ?></h3>
                    <p><?= get_field('about_where__desc'); ?></p>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section>