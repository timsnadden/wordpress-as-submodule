<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ( file_exists( dirname(__FILE__) . '/wp-config-db.php') )
	include( dirname(__FILE__) . '/wp-config-db.php' );

define('WP_SITEURL', "http://$_SERVER[HTTP_HOST]/wordpress");
define('WP_HOME', "http://$_SERVER[HTTP_HOST]");

define('WP_CONTENT_DIR', "$_SERVER[DOCUMENT_ROOT]/wp-content");
define('WP_CONTENT_URL', "http://$_SERVER[HTTP_HOST]/wp-content");


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (!defined('DB_NAME')) define('DB_NAME', 'wordpress');

/** MySQL database username */
if (!defined('DB_USER')) define('DB_USER', 'root');

/** MySQL database password */
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', 'root');

/** MySQL hostname */
if (!defined('DB_HOST')) define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
