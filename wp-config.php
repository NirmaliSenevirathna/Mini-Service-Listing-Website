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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mini_service_listing_website' );

/** Database username */
define( 'DB_USER', 'mini_service_listing_website' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+I!V+:%LQ:bu7u%H,$hOwsbtG2L#2bVSN5C$kK%O)%%s^xeUSI`&B|]^JR=WRD>F' );
define( 'SECURE_AUTH_KEY',  'DA3rjS)hA~*I|u(].G3@J^,JId61OHseEzZAWE%zZCJ)Y=4l`HVyWBjD8%eu0?JT' );
define( 'LOGGED_IN_KEY',    '&1a7-Y:/^Ep{g(@fP$+1iZ?d_xd_U#|RKO#VS9K46T F/1%6:DpBK!2(c)0tokh0' );
define( 'NONCE_KEY',        'UcQpeBe5VAn-Ck]es:{G.k?xVIqKz)w@CA :Mcl(`E},e[i&A`jyOZZ/}1|c]E*~' );
define( 'AUTH_SALT',        'W^r%n4o]wcS7?o8*YpbG>{K<z:Kzb_M?d/C]L]k{H&#G4MDmeQ1lnOGPZ8|Ah)Q^' );
define( 'SECURE_AUTH_SALT', 'U]G-r%O7Jz!%sU-@uV/>^zzQQE01CJxzl_L)?BET09)f}_x,?q`45sto/D|z;{_#' );
define( 'LOGGED_IN_SALT',   'JD4#pp3Hv1])kpGQ/fuQvw6^)&fxn((o;_R%@?j,P& ]wRaUbRGd1l|b`P9;YhYm' );
define( 'NONCE_SALT',       'Nlf-0lH]7:,=nLh{oA[K=4^RnV? 3@`@/ID=ys;*dk!{)[:im-Q(yF+rY6uYbQZu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
