<?php

$settings = get_settings_site('settings_header') ?? [];
$logo = wp_get_attachment_image_url($settings['logo'] ?? '', 'thumbnail') ?? '';


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="header">
        <div class="header__container container">
            <div class="header__wrapper">

                <?php if ($logo) { ?>
                    <a href="/" class="header__logo-wrap">
                        <img src="<?= $logo; ?>" alt="" class="header__logo">
                    </a>
                <?php } ?>
                <div class="header__burger burger-btn">
                    <span class="burger-btn__item"></span>
                    <span class="burger-btn__item"></span>
                    <span class="burger-btn__item"></span>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->