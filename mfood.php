<?php
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
define( 'DB_NAME', 'u210836627_oam3u' );

/** Database username */
define( 'DB_USER', 'u210836627_9aHd7' );

/** Database password */
define( 'DB_PASSWORD', '3(4yL.lNF4' );

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
define( 'AUTH_KEY',          'Ycmc?~5Q/Q@%>$zB&0K&@xn$ ER,u562nlCo(fYa3?2Mkw{x<T ucIZ${4WN_o`O' );
define( 'SECURE_AUTH_KEY',   'st-1Mcus<Wq0hm!wf^UBzH tSaIe)[N[QdOzb[v7w(BtW%3KEXvIWr&#z7#KO}+7' );
define( 'LOGGED_IN_KEY',     '/i~3 /vd@T%2dPC&O^b,TZvX+ee(?)n}*X_#aO[U%BS~)8X(L??2LTAc!`]:N2aw' );
define( 'NONCE_KEY',         '*MoWv|exiE3uGe![q@3R=IN!kd_P6p%j$nEJTl;SMANpsM6F]h2FgBk^`6^Le:8 ' );
define( 'AUTH_SALT',         '(`|lcP?]d53Cia|@-3]S,SD_Y};0PHfk:`]fYuUJ-S[jXYGEPGZt{O`%B1vrUt1u' );
define( 'SECURE_AUTH_SALT',  '7RI3AiSX<U<~`FcnX7XJV7`>24hd-<&~d.bRKO?Sm,CtZx@=[G@RH}XPl9fZs>ER' );
define( 'LOGGED_IN_SALT',    '0=] W_4E(g,`q|*0BGf{n_~JM&B.V7Om9=qkDo_~|0t@g2GjVGQAhNMM^Z9(/$3n' );
define( 'NONCE_SALT',        'IPL#3#X.zJ#@;+P,nPqSI)YKJ`%<Y%doU<Gcu]eF*^wt.Bka4r|!Qic_ytiJ=$9/' );
define( 'WP_CACHE_KEY_SALT', 'z2(?X[Zx8u4JY`&,hO%w]UKg+Pa!)#qk,XF1jSwLCM&FpKJ$1M 38EH+W=^@3+jv' );


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
define( 'COOKIEHASH', 'f96fc373c2ef4143afc4831d9d59596f' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
