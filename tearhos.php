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
define( 'DB_NAME', 'u210836627_S358b' );

/** Database username */
define( 'DB_USER', 'u210836627_h8lBM' );

/** Database password */
define( 'DB_PASSWORD', 'H4cbCwkghc' );

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
define( 'AUTH_KEY',          'lTAMphO@>lET QmN2TG)l!c .~XL41#J4_Y>E{*XvWl5$MO:z],J[x1 G5[0 HT;' );
define( 'SECURE_AUTH_KEY',   'Q18>ZZvG0UP[NtYrfyw//-)%V-0AkGuZG*)5tI7yrk7l%[V/XIt%e4SN<&_Q4P)c' );
define( 'LOGGED_IN_KEY',     'cmYV $M}Z%zM1p8MQzZ~9N}7HJu4G>!Sc9;;rIE()`YN/ *8OO_>%>.XVfVz_9^t' );
define( 'NONCE_KEY',         'k)~&-ZPaunt6(7h@l}<b:zq:_E ma+rvZu7^Yr0`LjOqbg[#},=0cCp6Lhtdwt_j' );
define( 'AUTH_SALT',         'Fn;X!]|5gsKz<TKt8-%{HY>y6v*xM&IVKj,`HPv1lL-HA!%x+,CoNQVcBv9YKV)t' );
define( 'SECURE_AUTH_SALT',  '@y^DN4IR)- v$~K~R- mfxxy}@/Ai,[T$fJjz2-6,ic6 W:V Nob0*C910?>l7ky' );
define( 'LOGGED_IN_SALT',    'a_4G:*;Ue3HZ7,x@pxO[8wbUi{DkULJyEfbIutsr=Jd#SG)>e22</6+l:lo+|$x9' );
define( 'NONCE_SALT',        'v=*pRV2~92Rf3v?{Zoj0k4|4RUJ9{jS&6lQhz[@KZt;>9jJF#U5iv2%>l,$(ON+w' );
define( 'WP_CACHE_KEY_SALT', 'I+dHpQ;f6g1vK9F<8:(1XS~#D3&Q!TP/*DQ&IVSfM&{/#ymM^b]9<wCl{GL%p{Mh' );


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
define( 'COOKIEHASH', '26cc1245d4ad77b928718d55e4ce71dc' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
