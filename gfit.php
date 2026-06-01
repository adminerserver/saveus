<?php
define( 'WP_CACHE', true );



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
define( 'DB_NAME', 'u210836627_mxB0B' );

/** Database username */
define( 'DB_USER', 'u210836627_onT5L' );

/** Database password */
define( 'DB_PASSWORD', '2Qh1eGxeZe' );

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
define( 'AUTH_KEY',          'BH73rHy5c78FN_k+f6N&QrtAY*v2e8FAfS)jiQrX6L<P4ap}tk?Qa#yCjTb[(pSIJ<(8[N:Cq7BUs+i_NiZlOa-W):9+Nvf2' );
define( 'SECURE_AUTH_KEY',   'V6ft<Y*ie4MGsCOS;5A-eAU4N]j#wrzm!qz3Bi![2XI,Q)}*p[<t][M-Y%@EV^1zb0HLqpJSX]dh);i4wbD(_nZj;tZ#s)DV' );
define( 'LOGGED_IN_KEY',     ':Yax[F{*6a8Z!?r}wEFvK$5Qh%8nf6!0_LF5xX]:ItZH1HCJz&G]N18M#Vcxil9a;&c*@?&4NX{iP[Y:fG8%*;e+3#7qV&Ez' );
define( 'NONCE_KEY',         '0_76$pYVV2J=NpG{I1YE1lejb%yNF8oFrnXp{4hmaP!QR5fLXz%6OX-UX@AhdGYu*}_fURz!%=Fj*^X>X(c%zMqhd#t:v,=p' );
define( 'AUTH_SALT',         'jaUOQJfb;A$--Es?ZVL*ApR:_N8y+CuH4wfxK0FC:!q]RGoLT$!iF3PNY^$q%d]t0:-t3lD,AI[85+m^iHAS^PKqr+N,=e3!' );
define( 'SECURE_AUTH_SALT',  'SVmbU+2_U3IIg*b&jD!A40e7rga&$CP2uqH^ru6rS9)Y8=fMw5(WFo$Q=%)0V,P62e+2q$6L.]A1H!}d;zL5&}Y8+TGT0ab+' );
define( 'LOGGED_IN_SALT',    'FfhY.ozHcq%I$j;L.^(U_}[sRMTYzT+uM[yUQy)85r9THvM4m*HyB!*9bP7Sb^^hwJ6;ub2&qj=1n*Y7&-{NC!gmii@r6GUN' );
define( 'NONCE_SALT',        'AXzB:vY<c5p-7I5>P%=iO?i;BwBrE!tGnuN8:SpbgMp+6SR$ZYw5OCJp!NXKEZtzO[;$ogQ3;9EPk@hEKQ}D:=ayn2sBd:JL' );
define( 'WP_CACHE_KEY_SALT', '3*)&3#@iQgeIc=G(iPngLE3!r]0]mc+D78fDz$u3mKTw2#DUoqmSEHaNWO#B,0XBYnB._TWV.8HQeI$t20%dD3n&JWV]GwD%' );


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
define( 'COOKIEHASH', '228ba4256ece2fabc250f4d48bc47001' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'DISALLOW_FILE_EDIT', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
