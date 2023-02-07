<li class="artists-list__item" aria-index="<?= $args['index']; ?>">
    <?php the_post_thumbnail('post-thumbnail', ['aria-hidden' => 'true']); ?>
    <?php if (get_field('website_link')) : ?>
        <a href="<?= get_field('website_link'); ?>" class="button button--primary button--as-icon" target="_blank">
            <svg aria-label="<?= get_the_title(); ?> sur Youtube (nouvelle fenêtre)">
                <use href="#youtube" />
            </svg>
        </a>
    <?php endif; ?>
    <?php if (get_field('description')) : ?>
        <button class="button button--light button--as-icon js__toggle-description" aria-controls="description-<?= $args['index']; ?>" aria-expanded="false">
            <svg aria-label="Plus d'informations sur <?= get_the_title(); ?>">
                <use href="#info" />
            </svg>
        </button>
        <div id="description-<?= $args['index']; ?>" class="description">
            <button class="button button--light button--as-icon button--small js__toggle-description" aria-controls="description-<?= $args['index']; ?>" aria-expanded="false">
                <svg aria-label="Fermer Plus d'informations">
                    <use href="#close" />
                </svg>
            </button>
            <h3><?= get_the_title(); ?></h3>
            <?php if (get_field('description')) : ?>
                <p><?= get_field('description'); ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</li>