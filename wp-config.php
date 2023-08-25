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


define('AUTH_KEY',         'rFRG51J6J9PRC1RdUH355CgkWssA6fzLnL9TAlozDyKLba+TmL7e6uDLtf8Mhgl9lcJQsJY9kZxysL6iAU+mbQ==');
define('SECURE_AUTH_KEY',  'Q7DctXIj1snk4ZbcH4n4lBJ1yeB1Z2G+aAWdcgG/FBv875QahAP2Tb650ODKjAU0jfZoA77tsn/VbIKVV4iecA==');
define('LOGGED_IN_KEY',    '5vRYUfOfbev3SflE4Psd2PvZQL861TfkGgRD+kuyypGfhAqcG30L9gapENuVDeFE4GFDwuKkDAI9n2OtRiD51w==');
define('NONCE_KEY',        'TxUSCcg/A7PsTVUS+lpRZyiQc4alchgvi9wPjSni9IPnQ0pd9QXjLa5K3h59LewW8dbaidM4OgyesWxMDG2dwQ==');
define('AUTH_SALT',        'rU8hAgiFm/sEw7ofRHI+FJTwrnKygJ7pJXp6+0SjnewvEd1jacGf+SpWn/PrHVxD235g7jMs/Uo4LZbt7D9Ggg==');
define('SECURE_AUTH_SALT', 'I3zRwUilb3hzPUwaV2oLjFlQsbRczIGm49sLvLLno6nLXCQWsfL55f0pbvP+SwaIhDAq8HCo89PBflayPMgDsQ==');
define('LOGGED_IN_SALT',   'mchGmcUHH6FXYnCA1DQ6mHBQ1QlRF4wiCc/KnleZWn/c6bYv88afc2f8j9XpqghGfdDlwv9OzBl2DzR4rhfV/Q==');
define('NONCE_SALT',       '4RSa4IE75u3645psyqNITidsshekBxE1A+Thk0gnqNtsgAwUiWwrdDwNV/If+P1muOBeU5ZBH3+NjCmZ0neHNA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
