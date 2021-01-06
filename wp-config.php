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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\open_server_5_3_7_full\OpenServer\domains\tobacco\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'tobacco' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'tobacco' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'jCFT=S{5+37$l)?Or25~r]|Pp-``/tXYx_4tG(Nf5|F*HYU583k gE.r-l4_oAb$' );
define( 'SECURE_AUTH_KEY',  '<(xp;@9E7jP>|``M/5vvEpE=04;@)t5!Sg0JL| iXX5?$9K^yOEOga$Yx1g1}O^4' );
define( 'LOGGED_IN_KEY',    'DW?so-NTUY*+ZG18lv^&0R/rU-Wzftsq;?$;dj6_s)1p7bJMLbB-`Hk 30yy!:hd' );
define( 'NONCE_KEY',        ')Q`tq3 q(oaRx;@^i;-[n a(mlMKN}tSu.5w^A|)-G #x(aY.6vxgUVcH#8a7&Zk' );
define( 'AUTH_SALT',        'fK{rY-=_{F{moPX+03h%k8kB3nE4Rt3)xiPKi;!7wIaBO%UC:egSnAn^f$sgIXb:' );
define( 'SECURE_AUTH_SALT', 'Z%[9&Ct46 mF<?NqHO=E2`K*z*&grj^7 M~jgcE9/|7x8&SO($EPHw%19a]{[6z3' );
define( 'LOGGED_IN_SALT',   'u+1ZTibn]3f(a))b)b}j{2cZR#Le>HHf<&nM=0gjDaM:7/OIp=[^$F6q!qBRkm;s' );
define( 'NONCE_SALT',       'MRl5Q*L*<NC6chMmnk)dZDM%VtlK8H{`{h^jP?0t`{7OHRPz9N]6=c.n.r:)$>!Q' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
