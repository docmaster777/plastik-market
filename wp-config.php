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
define( 'DB_NAME', 'plastik-market' );

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
define( 'AUTH_KEY',         'N59_7i6h`~0rvGS@>,YEJKw#uKLMm Q!mX1@/hmn,94aX_P>>[RX#{,[SjvH`{/!' );
define( 'SECURE_AUTH_KEY',  'XvusuTHxAu`!`xE5daLWn%u,7J<mPK w] %jKN$s&WXw{K]2apJJu>CEJXr4Fk%,' );
define( 'LOGGED_IN_KEY',    '${0{2]A{z[0p5^dy=KVcu&#K428v0nV?OCLBpWT]CLtQjv%CDh>(x4e%c)Wrp`J:' );
define( 'NONCE_KEY',        '@!iUx|$DP&wOC(Fqysn}=2dVO70<NfwHm6v|TM 5?TEwtBPZ.!Gg/|E27N%dt(5B' );
define( 'AUTH_SALT',        '!HQ3u^WqYSWy&{YjE5Be.%E-(JeZT@wn[fx@@O *8`+Xz)aq{nUit04(eGO9r 6S' );
define( 'SECURE_AUTH_SALT', 'v2xm+l9O=PGF1Ay~b!05ZGy}@]^pZAP1cH>RfVDS{j=0wa-BwBPTG7$RGY;ANWy3' );
define( 'LOGGED_IN_SALT',   't,l]6[:>Z5Q<~*$[UEi)vRm~(&SW<,(A^E<4:L>9OY%&k``SX4Ui^ZpQa:?o2Mm}' );
define( 'NONCE_SALT',       '7i:H=1RS&vqI&dMGT_TbZbde8;R+2J.hS7KLpC_Nu8{Hs-<1|=`hH9_s-O uigYh' );

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
