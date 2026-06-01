<?php

 // WP Compress Cache

define('DISABLE_WP_CRON', true);


 



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
define( 'DB_NAME', 'u210836627_LlpyV' );

/** Database username */
define( 'DB_USER', 'u210836627_kK5Uv' );

/** Database password */
define( 'DB_PASSWORD', 'O6nU4oDPZe' );

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
define( 'AUTH_KEY',          'VL25XEc~o_vp)PeyxTq][Fkx?@9!g %=>f%1CD_0xD+Wu^%%@1+XN:glAnS_ePF*' );
define( 'SECURE_AUTH_KEY',   's>(TOU;2_rEcS){*uV,iLEA[utg,/2nN<;qSh>{P)(^>YkMkDz]`=@76IeT[>@m0' );
define( 'LOGGED_IN_KEY',     'mU0oso%4743C)j$J=G=cbnq#nhZU%Drd0$Pi}!NJi.=7}oc,#~)tG(3Ks%}1qLvC' );
define( 'NONCE_KEY',         '5G88w{Oe%waP>; B5%wAO k.3J*&6CMD~<lz2H(f2?y,4xUvpS/v&7Ks*OM$#1(i' );
define( 'AUTH_SALT',         '}x[p&BO09LZ52.!.WqI+4ui]_j*Fzgi##y)9*zwvs1!,G5Anszr[-cGuoz7]G[/>' );
define( 'SECURE_AUTH_SALT',  '8v~:#cs/v2m+]@:xwkgsLHH?2ggfClUDd`$:56{Tr#kqo0#ZyS#S~#14gaZnS<#2' );
define( 'LOGGED_IN_SALT',    'N?^*Y%oEC.|BKC;C#^*7oW67-Fl{F,yA; aKI~?>1QZ@?qkZh=7vkJ9js$w}%} U' );
define( 'NONCE_SALT',        'j0qG#gZ$@/2tpF fAzT%.-@/4d,qe^9L9<Yuw1,IV,C=UhsON-?y4Wkx;^B)=,iK' );
define( 'WP_CACHE_KEY_SALT', 'i^`5p~!6onoD KPqwRq!%i@>v5:`#W(=~b;<F@Ex!PVGWqI e/e>b[4-?D-1vwf5' );


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


define( 'WP_MEMORY_LIMIT', '1024M' );
define( 'WP_MAX_MEMORY_LIMIT', '1024M' );

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '906cc01eeac3fb40a2f83bc3e1ca8d7d' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
