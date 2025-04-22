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
define( 'DB_NAME', 'awina' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&y|7.A+O`^<vz%GTV:M{l;@$x~!:jro 43)[pT|m**MN8L3wO@zUuL/sOI+6T(_&' );
define( 'SECURE_AUTH_KEY',  'Z#?1bq/!H@8d b*UICz3b(dJ>X%LQHsj3(7PxSamz?47(j@a}T^Ri]Q/lca3%L-?' );
define( 'LOGGED_IN_KEY',    '2Aw.a0i56f4]s-!0dT0Rm1~xw6_r)oe(()Aqnr&I!D`ys+vkKG^k[^gY@T-e,;Yb' );
define( 'NONCE_KEY',        '_cm0[DgQf8{J|AAZ|a;yc9TTc*5#5?P|_G0/s3<7Q$VMU@ik;BLYVh^xU_A>3];P' );
define( 'AUTH_SALT',        '8)I9xF#+O={+7B:ho5L-X|is{eL&EYvLai,ZX9fRdJ,se9M611)SIG,@.8E`eeX_' );
define( 'SECURE_AUTH_SALT', '@M6g~T,:3?fg!KQ4l]8b*E 4C)jQ#aM.x[0*)c cTxG/3 ,Zp3+00ROEUoLuP>0b' );
define( 'LOGGED_IN_SALT',   '[`]^YmI9K<+(pLdG&QV9?yr6c1,fAA]6Eekw*QLIOerQk[!MWgN5f/!eW 3`*j47' );
define( 'NONCE_SALT',       '0X}Up|S2OE]KB`5KEno*0,4RUE.ODU>l<~x$ppiA2R+(<Ko[X:pB^.y%iwU:d.br' );

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
