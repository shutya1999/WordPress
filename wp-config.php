<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'testTask' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~1Sw~S_&yrPEbue;1yN;nd6Z`*Y][!7N~X<m4G,3a}7IAW.89m]7!QG=/|>mhv-O' );
define( 'SECURE_AUTH_KEY',  'm`k|q!a`o&FhV{lm1TtG8Lg]&msT&WJw==7mjH]sM0;E(:!wks=40=I!t2e-y1CE' );
define( 'LOGGED_IN_KEY',    'q(>wzw4,k._RGO;F44L3!mS7,@f^FCD}:!cu_q]o.Ze~`Ba*cX`Ib^}cB>6=|n-(' );
define( 'NONCE_KEY',        ')Gzt2~tyK6V*%O~,+$_Q?@qn<~`vk#-KjkFkRq@*v%<Mwc$C*bIG5wX}q${wMpb)' );
define( 'AUTH_SALT',        'G|-7sOJQNPBE[hj4WG:Db*sS|T}j@9B!ht}/<fOTXwps|ftPD/h;oHF&O33QJza%' );
define( 'SECURE_AUTH_SALT', 'f+ief/#UfS2rXKugHMS!XR^79V&Y`,f8c,J=jKdmx?b-NzU^l-Djo`E-z[}RJ9ZI' );
define( 'LOGGED_IN_SALT',   'J}MGOi07hI{-N/I|?6&}c>-9%k!v ?hx~lF#!pv]kC?;WJM]mAy2^c9]@`VvIeFs' );
define( 'NONCE_SALT',       '>d~XOE2W,o}SzpR>X-jz%v%{IRTud0*= 75RlTXt 0i6+yVowApAT]f2mbT_8aH<' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
