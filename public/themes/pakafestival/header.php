<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open();
    set_skip_links();
    ?>

    <header role="banner" class="site-header">
        <div class="container">

            <?php the_custom_logo(); ?>
            <button class="button button--secondary button--as-icon button-toggle-nav" id="js-toggle-mobile-nav">
                <svg class="icon open" aria-label="ouvrir le menu mobile">
                    <use xlink:href="#menu-fries"></use>
                </svg>
                <svg class="icon close" aria-label="fermer le menu mobile">
                    <use xlink:href="#menu-close"></use>
                </svg>
            </button>

            <div class="nav-container">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => 'nav',
                    'container_class' => 'main-nav',
                    'container_aria_label' => 'principale',
                    'menu_id' => 'am-main-menu',
                    'walker' => new A11y\Menu_Walker()
                ));
                ?>

                <?php
                $links = [
                    'facebook' => 'https://www.facebook.com/pakafestival',
                    'instagram' => 'https://www.instagram.com/pakafestival/',
                    'youtube' => 'https://www.youtube.com/@PAKATVLifeMusicTravel'
                ];
                ?>
                <nav aria-label="réseaux sociaux" class="social-links__nav">
                    <?php foreach ($links as $key => $link) : ?>
                        <a href="<?= $link; ?>" target="_blank" aria-label="<?= $key; ?> (nouvelle fenêtre)">
                            <svg class="icon" aria-hidden="true">
                                <use xlink:href="#<?= $key; ?>"></use>
                            </svg>
                        </a>
                    <?php endforeach; ?>
                </nav>
            </div>
        </div>
    </header>