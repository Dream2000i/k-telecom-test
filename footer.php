<?php
$settings = get_settings_site('settings_footer') ?? [];
$logo = wp_get_attachment_image_url($settings['logo'] ?? '', 'thumbnail') ?? '';
$copyrate = $settings['copyrate'] ?? '';
$contacts = $settings['contacts'] ?? [];

?>

<footer id="footer" class="footer">
    <div class="footer__container container">
        <div class="footer__wrapper">
            <?php if ($logo) { ?>
                <a href="/" class="footer__logo-wrap">
                    <img src="<?= $logo ?>" alt="Логотип" class="footer__logo">
                </a>
            <?php } ?>
            <?php if ($copyrate) { ?>
                <div class="footer__copyrate">
                    <?= $copyrate ?>
                </div>
            <?php } ?>
            <?php if (!empty($contacts)) { ?>
                <div class="footer__contacts contacts">
                    <?php foreach ($contacts as $item) {
                        $icon = wp_get_attachment_image_url($item['icon'] ?? '', [30, 30]) ?? '';
                        $link = $item['link'] ?? '';
                        if ($icon && $link) {
                            # code...

                    ?>
                            <a href="<?= $link ?>" class="contacts__link">
                                <img src="<?= $icon ?>" alt="" class="contacts__icon">
                            </a>
                    <?php }
                    } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>