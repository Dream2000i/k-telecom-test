<?php

//=========== BASE CONFIG ============

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}


add_filter('wpcf7_autop_or_not', '__return_false');


function theme_scripts() {

	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css');
	wp_enqueue_style('owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');

	wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');





register_nav_menu('TopMenu', 'Верхнее меню');
register_nav_menu('footMenu', 'Меню подвал');
register_nav_menu('mobileMenu', 'Мобильное меню');





function get_settings_site($field) {
	return	get_field($field, 37);
}


add_filter('use_block_editor_for_post', 'disable_gutenberg_for_post', 10, 2);
function disable_gutenberg_for_post($use, $post) {
	if ($post->ID == 43)
		return false;
	return $use;
}
