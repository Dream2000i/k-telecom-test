<?php
/*
 * Template Name: Главная страница
 */
the_post();
get_header();

$mainbanner = get_field('mainbanner') ?? [];
$tariffs = get_field('tariffs') ?? [];
$form = get_field('form') ?? '';


?>
<main id="front-page" class="page page_front">
	<?php if (!empty($mainbanner)) { ?>
		<section class="mainbanner-block">
			<div class="mainbanner-block__wrapper owl-carousel">
				<?php foreach ($mainbanner  as $slide) {
					$title = $slide['title'] ?? '';
					$desc = $slide['desc'] ?? '';
					$link = $slide['link'] ?? '';
					$img = wp_get_attachment_image_url($slide['img'] ?? '', 'large') ?? '';
				?>
					<div class="mainbanner-block__slide slide">
						<div class="slide__container container">
							<div class="slide__left-side">
								<?php if ($title) { ?>
									<h1 class="slide__title"><?= $title ?></h1>
								<?php } ?>
								<?php if ($desc) { ?>
									<div class="slide__desc"><?= $desc ?></div>
								<?php } ?>
								<?php if ($link) { ?>
									<a href="<?= $link ?>" class="slide__link btn">Подробнее</a>
								<?php } ?>
							</div>
							<div class="slide__right-side">
								<?php if ($img) { ?>
									<div class="slide__img-wrap">
										<img src="<?= $img ?>" alt="Изображение слайда" class="slide__img">
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</section>
	<?php } ?>
	<?php if (!empty($tariffs)) { ?>
		<section class="tariffs-block">
			<div class="tariffs-block__container container">
				<h2 class="tariffs-block__title">Тарифные планы</h2>
				<div class="tariffs-block__wrapper owl-carousel">
					<?php foreach ($tariffs  as $slide) {
						$name = $slide['name'] ?? '';
						$speed = $slide['speed'] ?? '';
						$desc = $slide['desc'] ?? '';
						$option = $slide['option'] ?? '';
						$price = $slide['price'] ?? 0;
						$note = $slide['note'] ?? '';
					?>
						<div class="tariffs-block__item tariff">
							<div class="tariff__wrapper">

								<?php if ($name) { ?>
									<h3 class="tariff__name">
										<?= $name  ?>
									</h3>
								<?php } ?>
								<div class="tariff__speed-title">
									Скорость интернета
								</div>
								<?php if ($speed) { ?>
									<div class="tariff__speed-val">
										<?= $speed  ?>
									</div>
								<?php } ?>
								<?php if ($desc) { ?>
									<div class="tariff__desc">
										<?= $desc  ?>
									</div>
								<?php } ?>
								<?php if ($option) { ?>
									<label class="tariff__option-wrap">
										<input type="checkbox" name="oprion" class="tariff__option-val">
										<span class="tariff__option-title">
											<?= $option  ?>
										</span>
									</label>
								<?php } ?>
								<?php if ($price) { ?>
									<div class="tariff__price">
										<?= $price ?> ₽ <span>в месяц</span>
									</div>
								<?php } ?>
								<?php if ($note) { ?>
									<div class="tariff__note">
										<?= $note  ?>
									</div>
								<?php } ?>
								<label el class="tariff__selected">
									<input type="radio" name="tariff" value="<?= $name  ?>" class="tariff__select-input">
									<div class="tariff__btn-selected btn btn_blue"><span>Тариф</span>выбран</div>
									<div class="tariff__btn btn">Выбрать <span>тариф</span></div>
								</label>
							</div>

						</div>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php } ?>
	<?php if ($form) {
		$objectCf7 =  wpcf7_contact_form($form);
		$shortcode = $objectCf7->shortcode();
	?>
		<section class="form-block">
			<div class="form-block__container container">
				<div class="form-block__wrapper">
					<h2 class="form-block__title">Подключиться просто!</h2>
					<div class="form-block__form form">
						<?= do_shortcode($shortcode) ?>
					</div>

				</div>
			</div>
		</section>
	<?php } ?>
</main>
<?php get_footer(); ?>