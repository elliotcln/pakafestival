<section class="section-partners" aria-labelledby="section-partners__title">
    <div class="container">
        <h2 id="section-partners__title">Ils nous soutiennent</h2>
        <?php
        $partners = get_field('partners', get_option('page_on_front'));
        if ($partners) :
        ?>
            <ul>
                <?php foreach ($partners as $partner) : ?>
                    <li><?= wp_get_attachment_image($partner); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>