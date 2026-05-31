<?php
define('DISABLE_WP_CRON', true);
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u210836627_Hfp06' );

/** Database username */
define( 'DB_USER', 'u210836627_7stin' );

/** Database password */
define( 'DB_PASSWORD', 'eI5ek5JUdw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'tqpP0N%s.S5u!qgWwxQC4C(1CctQ3#+<M,n,Npa)@XLbW8!rRl_PNq]_;?|QYN2S' );
define( 'SECURE_AUTH_KEY',   '2&)p}HyK%W>cR/p{1P^4=5&1~ ;@3?z~19_2hA6*P/d_Z%B;rHiV$sC/5LT<~o=&' );
define( 'LOGGED_IN_KEY',     '8<.~X>i5qYgO4r~kFT%UF2Ah)z&9[I~/P $W% 9t]vK3cbnD>cS9yw1vX3~{o#Kq' );
define( 'NONCE_KEY',         ',wv8c_1C|bG,@:xeG>p`I=G]GD5>NIkuZ=m2*os#vvvj<:!dUk%(zXK/$wPC5B)1' );
define( 'AUTH_SALT',         'ryt{IPWX+;8X}TGo;vS!cG.m3T$V:iTfoJ$;0WCNn-L:yB#VE9&l_^DK,rortXg~' );
define( 'SECURE_AUTH_SALT',  'Ik|x:32 ]60/m}QDbK]N.os_=axIv058>gMJf)g6)f,l2^EW]<`c,/SdG$T.?/{X' );
define( 'LOGGED_IN_SALT',    '}^-cfqws=!R`lgo(O9v`:b[8IfuBr,MC+M^d&m}D_ H8  pawX$sXhbgujsf`lT(' );
define( 'NONCE_SALT',        'u%&B,@V/`fx;@m*6mgfe8/(*DdsCblI~ ,jfG[3~PtpqQYGI:PBz/*N#j+Ziz2UA' );
define( 'WP_CACHE_KEY_SALT', ']E|Ns=yZ6)lF;Lbh^mGWY@_VyKE2R$Z?Rss7R@R{~})fR}g3(;X3thg?AyPhAWb!' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '01205a5c46e62919d89fe46b61a74e20' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
