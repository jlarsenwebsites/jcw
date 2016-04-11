<?php
define('DB_NAME', 'jcw-wp-PAF5aQqD');
define('DB_USER', 'j8UAqpFIKiKw');
define('DB_PASSWORD', 'BtMjqNPR4rEUb6IP');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'LtzZmX6aHRKcWBPhfsSssGsma2M7qqC9kvDUTrUs');
define('SECURE_AUTH_KEY',  '5saWs98l4AdvISQazIdChjMb5eHMWqmusrJ7LoCB');
define('LOGGED_IN_KEY',    'Fwmv3kmLkHS97IVSKEW67735PEmDAJYxuDDlBICJ');
define('NONCE_KEY',        'LF5BKa2az4xgiqGGtCrZZMph2HZS4py8UHYCxkXe');
define('AUTH_SALT',        '5LKMQxOTHC5pIxSZAoObLbCW95fyUxNUxZxab4if');
define('SECURE_AUTH_SALT', 'vfCpaVNmVlUdmxSsXhsMCXHHDzIKQMLBQAjcIFeD');
define('LOGGED_IN_SALT',   'tkoIR4s5yVLvo0geGJr8wLpIa8jvEPi1j7O2JmnB');
define('NONCE_SALT',       '81IHqKQd20zuCucPbiPP3Lhvor2PpMYk9LYW3jRa');

$table_prefix  = 'wp_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
