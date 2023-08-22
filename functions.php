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
	wp_enqueue_script('inputmask', get_template_directory_uri() . '/assets/js/inputmask.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('mobileMenu', get_template_directory_uri() . '/assets/js/mobileMenu.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');





register_nav_menu('TopMenu', 'Верхнее меню');
register_nav_menu('footMenu', 'Меню подвал');
register_nav_menu('mobileMenu', 'Мобильное меню');


add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg_for_template', 25 );
 
function disable_gutenberg_for_template( $can_edit ) {
	if( empty( $_GET[ 'post' ] ) ) {
		return $can_edit;
	}
	
	$excluded_templates = array(
		'front-page.php',
	);
	
	$template = get_page_template_slug( intval( $_GET[ 'post' ] ) );
 
	if( in_array( $template, $excluded_templates ) ) {
		$can_edit = false;
	}
 
	return $can_edit;
}


function get_settings_site($field) {
	$defaultSettigns = get_posts(['post_type' => 'site-settings'])[0] ?? '';
	return	get_field($field, $defaultSettigns);
}

add_action('init', function () {
	register_post_type('site-settings', array(
		'labels' => array(
			'name' => 'Настройки сайта',
			'singular_name' => 'Настройка',
			'menu_name' => 'Настройки сайта',
			'all_items' => 'Все Настройки сайта',
			'edit_item' => 'Изменить Настройка',
			'view_item' => 'Посмотреть Настройка',
			'view_items' => 'Посмотреть Настройки сайта',
			'add_new_item' => 'Добавить новое Настройка',
			'new_item' => 'Новый Настройка',
			'parent_item_colon' => 'Родитель Настройка:',
			'search_items' => 'Поиск Настройки сайта',
			'not_found' => 'Не найдено настройки сайта',
			'not_found_in_trash' => 'В корзине не найдено настройки сайта',
			'archives' => 'Архивы Настройка',
			'attributes' => 'Атрибуты Настройка',
			'insert_into_item' => 'Вставить в настройка',
			'uploaded_to_this_item' => 'Загружено в это настройка',
			'filter_items_list' => 'Filter настройки сайта list',
			'filter_by_date' => 'Фильтр настройки сайта по дате',
			'items_list_navigation' => 'Настройки сайта навигация по списку',
			'items_list' => 'Настройки сайта список',
			'item_published' => 'Настройка опубликовано.',
			'item_published_privately' => 'Настройка опубликована приватно.',
			'item_reverted_to_draft' => 'Настройка преобразован в черновик.',
			'item_scheduled' => 'Настройка запланировано.',
			'item_updated' => 'Настройка обновлён.',
			'item_link' => 'Cсылка на Настройка',
			'item_link_description' => 'Ссылка на настройка.',
		),
		'public' => true,
		'show_in_rest' => true,
		'supports' => array(
			0 => 'title',
			1 => 'custom-fields',
		),
		'delete_with_user' => false,
	));
});
