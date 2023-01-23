<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header role="banner" class="site-header">
        <div class="container">

            <div class="brand">
                <?php the_custom_logo(); ?>
            </div>
            <button class="button button--secondary button--as-icon" id="js-toggle-mobile-nav">
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
                    'container_aria_label' => 'principale'
                ));
                ?>
                <nav aria-label="réseaux sociaux" class="social-links__nav">
                    <a href="" target="_blank">
                        <svg class="icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                    <a href="" target="_blank">
                        <svg class="icon">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a>
                    <a href="" target="_blank">
                        <svg class="icon">
                            <use xlink:href="#youtube"></use>
                        </svg>
                    </a>
                </nav>
            </div>

            <!-- <nav aria-label="mobile" class="site-header__mobile-nav">
                <div class="brand">
                    <?php the_custom_logo(); ?>
                </div>
                <button class="button button--secondary button--as-icon" id="js-toggle-mobile-nav">
                    <svg class="icon" aria-label="ouvrir/fermer le menu mobile">
                        <use xlink:href="#menu-fries"></use>
                    </svg>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => null,
                ));
                ?>

            </nav>

            <div hidden>
                <div class="brand">
                    <?php the_custom_logo(); ?>
                </div>
                <nav aria-label="réseaux sociaux" class="social-links__nav">
                    <a href="" target="_blank">
                        <svg class="icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                    <a href="" target="_blank">
                        <svg class="icon">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a>
                    <a href="" target="_blank">
                        <svg class="icon">
                            <use xlink:href="#youtube"></use>
                        </svg>
                    </a>
                </nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => 'nav',
                    'container_class' => 'site-header__nav',
                    'container_aria_label' => 'principale'
                ));
                ?>
            </div> -->
        </div>
    </header>