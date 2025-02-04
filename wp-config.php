<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'undangan-pernikahan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'X4XeZzG7WhK9osX9NXGwUj0Rgc22mRCCNLDeykR32UFKnr9LKTSe2Qaf07UuDgsM' );
define( 'SECURE_AUTH_KEY',  'PLVjezk8ynmsRccWYJeXFxkc2y4XKsC9jlGlkwaq7PTfzvpIbkwc28wRCdKK3Nft' );
define( 'LOGGED_IN_KEY',    '5T41uC8V8l8SVzLg9oHZuhKqraui42h0AcD8bVCn9CHjqg0iRMcFN98nbGbdHTjB' );
define( 'NONCE_KEY',        'BtfjluvC9epEUTrclHamDTsmm1WRsoWGzrrxCMOqbCbx2TMWYSIqLqU6X3cNyuQo' );
define( 'AUTH_SALT',        'YVKhd9FgUPJs49W2jZQR39e1sauwALfBufdo4W3ReP6TyI3ZoIYNaTf2ve8pYss4' );
define( 'SECURE_AUTH_SALT', 'KfxFLAK8MYi9veqTYA9QIFkzoP0MCKXldqGYWq9Bsy5e0qKg2YbKNhCfWIKSf8P5' );
define( 'LOGGED_IN_SALT',   'l3lnbsNYDaWaG133wJpMQZ4BZj02q1jyeapWOdTLBHhRV5bZ1WKELTO14MPkrhve' );
define( 'NONCE_SALT',       'phh9z3tZhdt9q40yOYYgaqBt6QQX3kGCsbbEB7xJMci5XbKv5E3FpWl5QkcCVjYN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
