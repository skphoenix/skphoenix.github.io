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
define('DB_NAME', 'Skphoenix');

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
define('AUTH_KEY',         '-DM[k;DMQAh[#&ow#!n(U0uw{;*4-=cHu?2#*}t{*QEh`_!$Mc19rq~g4]?d :&i');
define('SECURE_AUTH_KEY',  'H:L2O5_8|Wb}:WW! 3Yp^.9fX+D4F2+ k!wAbKz-}q1Os!B255Z5f735-79;,hTV');
define('LOGGED_IN_KEY',    'Y5Vd1!Bkl1#|$0,+UTO>qTCRiKy)0t>MwhLh8<Gx!DL9Y5XmooURbT~_ {b+l:6u');
define('NONCE_KEY',        '5eGV^Q=wIas#^bJvWcIftY8P+O|^!;>?/{uu5SFKH8X*>1g~+TQ<(W~G#VZg)Tb?');
define('AUTH_SALT',        'I$>n2$vk6[J)y$YNaPpB1:opt3;m5hGyfreT;fX)^m[yNU~5F&5?-4@U@bUs-nf.');
define('SECURE_AUTH_SALT', 'hw H$ dV0TM~a,@S.n&#B.8Qz=:2A?8Q,spA}!DnKw;->gc ssIC57O^-{cC!W N');
define('LOGGED_IN_SALT',   ';60@Yc9cH!p&B$O$}/byTMS:@,26b+I(HT$(NT/BSJ!r`?1s$Oi$ubDgM-zSk5-<');
define('NONCE_SALT',       'Lyk~il-xX%m)dce6xQ:cN%)GO/8`*b#drd+&aE>?12WmN}/SLbbBBqYzozVfZk]x');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
