<?php

$settings = get_settings_site('settings_header') ?? [];
$logo = wp_get_attachment_image_url($settings['logo'] ?? '', 'thumbnail') ?? '';

$menu = wp_nav_menu([
    'theme_location'  => 'mobileMenu',
    'container'       => false,
    'menu'            => '',
    'menu_id'         => 'mobile_menu',
    'menu_class' => 'mobile__menu-wrap nav-menu',
    'fallback_cb'     => 'wp_page_menu',
    'depth'           => 3,
    'echo' => false
]);

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
                <div class="header__burger burger-btn mob-menu-control">
          
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <div id="mobile-menu" class="mobile-menu">
        <div class="mobile-menu__wrapper ">
            <?= $menu ?>
        </div>
    </div>