<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'modelo2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fB!fC[9i:VBbVP[C/m`d<b!?:D5susP*.;z@KR<r{(yZQDEw~(1AoN9sIpX3.R6;' );
define( 'SECURE_AUTH_KEY',  'HCa6V]LU|o|.<ZDCmC{@&4|v3SI)KdOxN~iL}0c{K0L:5VhmR3Ux..qTCUU&}RZV' );
define( 'LOGGED_IN_KEY',    'ws7WZjm?SYmDG@u<)]`#&Ha3F?:V8#Z-(dHTY)3q<ySli@Q};@`|N-B]}xlPX|A*' );
define( 'NONCE_KEY',        'y}U%,e}7-Jg68C-bY82K!Ou_kP&tGLpH|0w3rX~^a7tXbf@~#<!LWE_YC~hif@M2' );
define( 'AUTH_SALT',        'D@n)rM$o;Dyi3y:.iLXO8Fj@>_Aagg_n:Hx@YK@=%?v;#KB@w]$KDLQOP*c:fx_f' );
define( 'SECURE_AUTH_SALT', 'eM7Kly~^<4CQ@]>Vh}iA$hRw)H#(*3#IE4(jYy1W0mN!$1_5WC7 L&aHyNCstAI(' );
define( 'LOGGED_IN_SALT',   '&*OQXid>b>[$SF+8{n0=6+%*L|s@).,3[:KJ9%&D*Om[>|Q9?s+sJye9[KG4r(/C' );
define( 'NONCE_SALT',       'Q5jB{*T1}ARM_<miQh+?T+K?r>!l{t>Dr^JLVr|DIME]mXtNV=0^K@kj}l}O>:7I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
