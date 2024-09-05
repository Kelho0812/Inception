<?php
define('DB_NAME', getenv('MYSQL_DATABASE'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = getenv('WORDPRESS_TABLE_PREFIX') ?: 'wp_';

define('WP_DEBUG', getenv('WP_DEBUG') ?: false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');