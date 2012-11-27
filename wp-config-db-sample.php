<?php
/**
 * Make a copy of this file named wp-config-db.php
 * wp-config-db SHOULD NOT be version controled, add it to gitignore
 * Use this to store database access information so the main
 * wp-config.php file can be modified and version controlled.
 */

/**
 * WordPress Database settings
 */
define( 'DB_NAME',     'database_name_here' );
define( 'DB_USER',     'db_username_here'   );
define( 'DB_PASSWORD', 'db_password_here'   );
define( 'DB_HOST',     'localhost'          );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
