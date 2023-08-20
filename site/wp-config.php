<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'k-telecom' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'k-telecom' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'k-telecom' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Cd_:mjq!,$h..gt2$l5tOP&YdUuOBGBlf8*I;@zBR>UJvgi`Rpj>@%;WXeMxaWmw' );
define( 'SECURE_AUTH_KEY',  'rW6IrG@B>%pnz}Xd~n1}b$,8hjL.V#KU/(GDcZfHqNTvQf@83JXi0gGIaVrk.;1`' );
define( 'LOGGED_IN_KEY',    'A#ZXH]pB:PT48W}q6`Q)pVA7,{+h2gdB]!5r9//R4#C~)U`x2; $R;j@$qVI0FM$' );
define( 'NONCE_KEY',        'dY8k/1X]8DKWnd Cr11gNM*swV$JhKmtH+MU3t~|CH1_Cf&&;mrY*ax(8c0J%N&Q' );
define( 'AUTH_SALT',        '#tJk&dgOFJznfb_np0e&5t@VaK-7j%EfyWkDSCc3F|&_+$KxCmtx0m#$tP&y|<9$' );
define( 'SECURE_AUTH_SALT', 'K38e6;|U#&/EKjBmMZ,UQ^Q,>(U5d{R=OHgJ6RG^&]WSU:)i[7DzFIJ^Erf2MHs2' );
define( 'LOGGED_IN_SALT',   'h]=a&isV5clT{jtQ(AM3/*g0v~>Op,>*B#=el-E~]Zh^oZ uS1YE>dL8)Bj=gwQx' );
define( 'NONCE_SALT',       '{W`}IwW?`_>iagMC<hv$1pC|#mo(?h+5XM;>*3^CIi[+U?Ba^x6Gf_(I<AJ?qix,' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
