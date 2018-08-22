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
define('DB_NAME', 'coffeelake');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C|5E9F@| =%p,4PJnpn9 SiH8Sa #Z,Nd+?e-p=x9S7my#S*=f7%%oVhHW`TYhjT');
define('SECURE_AUTH_KEY',  'Gsy/+lmW*Es~>zG8Jp.+Ow;f*n8B2qSe$Y@xAUPTU(AibbFqzkx*u-oiJiir~X3(');
define('LOGGED_IN_KEY',    '_oQ]RKosmd:aTJK&BK~%(?^Oh1X71608$Yj-(FN]^F0cvPtmQb*B1P?L;^=/p<CZ');
define('NONCE_KEY',        'E]zAYe/)[nEP7<pS{Oy^TR4g&oUz&]2rw:2u:@r#Hv>Mp1blWX`@E.RP&Ioc#Jx_');
define('AUTH_SALT',        '_v=C[1o9]Y]&CMiGC($A/S&<:1wE jqoT/f-a>F>yO*,o;R$Y$-y(MN$Bxtg/ 50');
define('SECURE_AUTH_SALT', ';`dE8=Sv990r)j0%sPGsKVFdpDumFz!xcgwKrTW+Hg=hs&%_z  L1$-z-!7h1RM#');
define('LOGGED_IN_SALT',   '8mXQpgw<2W!?;Y|gLw*IP123s#~)4m}ga`iVn{Y)q*p_X6NPuh6GS02djY3m-pnx');
define('NONCE_SALT',       '/gTcp.&GKpbS+=7O0976j$P@M_&LCz{X(!]E6)h+pmSnA4DvfuNpLerfIRW0X*7[');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
