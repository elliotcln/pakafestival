<?php
$selling_ticket = get_field('selling_ticket');
?>
<section class="section-programmation">
    <article class="prog">
        <div class="container">
            <h2>Découvrir la programmation</h2>
            <p>Retrouvez tous les artistes présents lors de cette édition et n'hésitez pas à vous pré-inscrire !</p>
            <a href="<?= get_field('programmation_link'); ?>" class="button button--primary button--as-link">
                <span>Voir la prog'</span>
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </a>
        </div>
    </article>
    <article class="tickets <?= !$selling_ticket ? 'is-closed' : null; ?>">
        <div class="container">
            <h2>La billetterie <?= date('Y'); ?> est <br /> <?= $selling_ticket ? 'ouverte' : 'fermée'; ?></h2>
            <?php if ($selling_ticket) : ?>
                <a href="<?= get_field('ticket_shop__link'); ?>" class="button button--third" target="_blank">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#ticket"></use>
                    </svg>
                    <span>Acheter mes billets <span class="sr-only">(nouvelle fenêtre)</span></span>
                </a>
            <?php else : ?>
                <svg role="img" class="icon" width="60" height="60" aria-label="Cœur brisé qui bât">
                    <use xlink:href="#broken-heart"></use>
                </svg>
            <?php endif; ?>
        </div>
    </article>
</section>