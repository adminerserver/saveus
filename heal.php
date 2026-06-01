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
define( 'DB_NAME', 'u210836627_EqCBn' );

/** Database username */
define( 'DB_USER', 'u210836627_um8Ns' );

/** Database password */
define( 'DB_PASSWORD', 'u1OKkAlX3z' );

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
define( 'AUTH_KEY',          'o8}Bh2H:a6VvX=6qoxwsQ1DcyjsCE{~FhhLk)xTJ7U).%;K-a:o}5|7+S?`XtE&M' );
define( 'SECURE_AUTH_KEY',   '73o=Pzm6j%v4mpeWe80D)X9v`-oW<Z1PLg!wzn~U#>pTIZc^^f[#8Y9ol:@}m@f[' );
define( 'LOGGED_IN_KEY',     'UAJs=T,s4-$#&Gd,Q0Z>}3m&[:nVo*^;W22p/wbc}o[:VCI#eHYV2 Cc}m$fzsAM' );
define( 'NONCE_KEY',         '!P],EONPwE!p]Trfk8bFw<NhY0Syd#ssJ0Wqo)<x&<F@AsRh NqA)ukIKt;eo+3S' );
define( 'AUTH_SALT',         ')/1;MBv2NnJxQl$H:0!weZ5`c0k9|[{v+s=o.{V(^Y^83nC/[vqBYJV,8)83Du<]' );
define( 'SECURE_AUTH_SALT',  '2=n|jQAA7?^eevmalb]8{wv or(H>&JYO?$@PYXje<TCsLPU*QuA|{T8.oy9EAAj' );
define( 'LOGGED_IN_SALT',    'EG`4*,o]/~[&H32W~Q~@i#MbmazK/l^T4Iqpg#U(FcCOGdg+#9sU,9g]Y^?-*&k;' );
define( 'NONCE_SALT',        'RP79n^#Gi@MCP#2_.ICvV~p_Jm=2sFK|Cy<9$<9g?3:%r^T=tu=b&gNC8=}d=e.i' );
define( 'WP_CACHE_KEY_SALT', 's,/L9b_^dnzMr$!=YV,VBGR.ht_Fkby7^7DJI6,^S#toXte^)CD*./5)o>B80>Gz' );


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
define( 'COOKIEHASH', '8341f2a3731bd3c6d872aab0b1da961b' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
