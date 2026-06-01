<?php
define('DISABLE_WP_CRON', true);
define('WP_CACHE', true); // WP Compress Cache

 

 



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
define( 'DB_NAME', 'u210836627_H3Y2c' );

/** Database username */
define( 'DB_USER', 'u210836627_KoMSH' );

/** Database password */
define( 'DB_PASSWORD', 'mkLygE6iaV' );

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
define( 'AUTH_KEY',          'vA4]J6ORgH?GL90|&DN( $bX0k9kg<3vgscrgKz4pAVAj:.U<*_xQK9k<~o6#G-P' );
define( 'SECURE_AUTH_KEY',   'f_Q?#q15|G>Zj$fm=k*a)TPh{gV$Jrk6`KJb#,b!c(gCm|g)#l{AGgdNYzwm,Zd[' );
define( 'LOGGED_IN_KEY',     '<x?ao{>jkwd4JW6$Jx},[i|3uwh1s@HmtuKX%LTP-eh:f9:gy@F2x[m{mAa&3 F`' );
define( 'NONCE_KEY',         '&iz^O/)XEkwFj[sqIEH9.}/qBC}Um$dW-..YE[&H E/]y?u6H:#&`~VH w4lUgX-' );
define( 'AUTH_SALT',         'sa5$#E#phxm:z)2to$!kLOq|$~Nq[7^upE<~q/:fui=:Qkuu/37gTtr3Lf}BUKT-' );
define( 'SECURE_AUTH_SALT',  'pt (d(Cpb%*APDc{2,pgw%Q:iu#_gRdi%W~/qQ>nAQu*s;v?DI+M[R:Y8q36`cYr' );
define( 'LOGGED_IN_SALT',    'wJGNIU.!!n?C[lYpc)c6kShf]A}o(<b!-t>345kl/ A)u8Gb+K4 xV#hj(wsu]A4' );
define( 'NONCE_SALT',        'CzE^)vQ&93ScRh??[vPL^zU]n9}D@@-uSWqPSc)k8W/Y3FK[$l:VBe}7k6Q%zpE4' );
define( 'WP_CACHE_KEY_SALT', 'csLgvK:wQ^kl9$|cAs.s<cQ*5 Tl!;2dIE@S!dpG/p Vm-vHKk.2_|i9DC[DUY6E' );


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
define( 'COOKIEHASH', '550bc4651093ae2337c4f1dd7b8d8465' );
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
