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
define( 'DB_NAME', 'cg48799_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cg48799_wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1tkT30gkUI8s' );

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
define( 'AUTH_KEY',         'A+AiR#0`f-8!`|-a%TbW3Q;=%mp4jYca_a~-07@&!rhD1!!tNVaD.FVTq<~G]#(L' );
define( 'SECURE_AUTH_KEY',  'a+?mG#UGazd2B-Ncb|z#:z6Ze1K IbgxEV7kqiU+N6KR~t^HMCN#Cn0_fEuM#_up' );
define( 'LOGGED_IN_KEY',    'u(|(a~ldidbD>s)7t29g,9_]$zk4OJX+1U#-?bRXB3Tfj Q)Vx@,P,&b/Z#V7*pw' );
define( 'NONCE_KEY',        '5tXL?sbpnM~&Tv/ UHc*?k1|N10mR6{+wr@/@{DrTO1yx21A23WjPSjR9G+3r[OV' );
define( 'AUTH_SALT',        'VqAn4[hnlLBL9*E-SXcf6aMszNds[Jr:eI%5x*oAd?+/#38)5Nt|IS8b2efwN~/:' );
define( 'SECURE_AUTH_SALT', 'fm!>#fhK*Yd*b>2<=l8^8-,{X)7U@79xJ@{M5Aj1?FGoqb?[TXTafu>JQ$W3C-)p' );
define( 'LOGGED_IN_SALT',   ' G>[?kbiI1E[z<G%mnD)01v>=#!kY4@>wJ,#vDjMP#+]o]Y`j%>4`o9D.s?LTsn_' );
define( 'NONCE_SALT',       ',ctkrlJz~d@UIjfT0B9X}d~1vQi]ATin@93d~L >.xq Lf+X*AWIvo}.*6*B gtT' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_1';

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
