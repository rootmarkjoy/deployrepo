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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'Dhidwal@1991' );

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
define('AUTH_KEY',         ' +L`Y+]fy1xr-zi=Q6f!?4*= 5pvTr3,yC~U-8f>Bmk1B,+-l|[O[HpI|>af]!c=');
define('SECURE_AUTH_KEY',  '+W|c#y/oB{3a#}&YkZi@xZfCm@pj7_;M)1iP+83K|VPs|LOT%3uqz6`wI 3Y:`Q5');
define('LOGGED_IN_KEY',    'pn+5Jfp&<`4mgIm0Ei:iCWdsNW_e={me]K$-z4*q`;titP_BbpGce,xaN0- Nli2');
define('NONCE_KEY',        '-|`|^g%*4HLtejuQrPEhw|S$[vy#*7F1s=Dt8.|NAj[Mg~eJj_v(t%*iqbnS9zc?');
define('AUTH_SALT',        '{wK];C%|rR.K>rZ z+kL6Q;xZl}w+:/9{a;}=)&dS&*vd3vTZ!(w|oAPZn1/2vm2');
define('SECURE_AUTH_SALT', '{(nD;+|e-p?tw6N6j$X%@Q@))cY60O0Nr|T/7${!EJ{5w[% SnBmLwM4Sqnb>EC%');
define('LOGGED_IN_SALT',   '~pn-#fQMw|Nwni}nh6LCHa+JZnl4v|zSJ#%:s|,Ud|=JpHg30`8~PHi.roS.CJdg');
define('NONCE_SALT',       'c#s$k?#7O.+(+7bAu;4{,xN458 #aF9A+aeP64ub</4kUZ*s-/R!0~{c$-AY>)&l');

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
