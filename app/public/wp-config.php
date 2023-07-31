<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'FA31QdYJUrMvjoFhHjBvVelOvQ38cN5SBF9Lo/26JfN1m+JpCZZ5571zOkqiA0wBvd5EwIkZ+OZ9jArT0/yO4A==');
define('SECURE_AUTH_KEY',  '0eOHhK3c3ik4P4z8XANGQxqBPig7dNhGayaZj5lKlUqNO/HKNbTOQeuwMsRRENojlp+ysHgpOK/fd8ErCHUnEw==');
define('LOGGED_IN_KEY',    'vq/+OGqTG5n4qX5CzjOjeX4QRtIVA8mQ0yodd9fjsX/gvSt7S/KBK3K0JjTZwd8ulSBIiKWJNF2RPA3k04GEuQ==');
define('NONCE_KEY',        'H9YhyGC7bJJ4hNmBzMU7xH3MoPPKXuKN9YNVPoW5fxeJ5Mkelz7d7KC0wveamM+PY5MMovFi04pLi89H7VPiLw==');
define('AUTH_SALT',        'kHxaIh+GK2/voQYnDmppv0qmYa+fyIZSd5MoTOeeyHFAfYJxqwu9LVfk+kLq3wxV1bPL210E/hZpQaku5D/Grw==');
define('SECURE_AUTH_SALT', 'YI1DRkPWF6GLL4jrmX0y4raAntN8TAp65qumMx2ytq8nkh5HqFa7s3+0ZjkdkAXexTahso1L9rrGidRsMErrNw==');
define('LOGGED_IN_SALT',   'O/6RVaI/Q6EvY458rvc6U/Oi2GMD9nm9EG9zyQIKBmhB4Xqu/jWlESX6hwjOFrx7I9ac8s5oHfOpjlPFxsffsw==');
define('NONCE_SALT',       'nVwCsfhyunrKAvHFgPU2WQtACRNi7oUfmyf9vTpUb1Haqz9SnMOpZNjo5o67yFxQFLglHkXiqyong8lm1x0ueA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
