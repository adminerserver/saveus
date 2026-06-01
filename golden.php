<?php
define('DISABLE_WP_CRON', true);
 // By Speed Optimizer by SiteGround

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
define( 'DB_NAME', 'u210836627_k4hzV' );

/** Database username */
define( 'DB_USER', 'u210836627_7TmU3' );

/** Database password */
define( 'DB_PASSWORD', 'wv78y4yg1J' );

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
define( 'AUTH_KEY',          'PE@}o]X+i`DYx<s#WYY^:w<}$e8Xtu9^`{sKc4q<G6,DY`uD,)Dk*f/o9jy^H9cI' );
define( 'SECURE_AUTH_KEY',   '!,9~O,}U[ q4A35ZkX423?Lg6(Oh^nS{1}~B#$DyjU{(y7+4].`;lDM[I4Wh/<,>' );
define( 'LOGGED_IN_KEY',     'OHsJMp /mFjrc3ZSF%2+|R,273x(m&@?HrM@YkzQm82q?Pg,U<X{GZ@_hw_]jr_z' );
define( 'NONCE_KEY',         '8GUo.JG{*h?I9Zt~H,yBOvt)Ma=(KnQfW@Rng%I#A-/^4G^Zf -~bVS0,U:VNq6|' );
define( 'AUTH_SALT',         '8mDY_NJ@rvCo)xgJc2K##Gl/3Ax6BA}Ty>!rUIPn?0Bxt:mVw~]m{,(Z6f#3.BY=' );
define( 'SECURE_AUTH_SALT',  'lNrYQQz/u){?xI96!(Qf_2fIPWTa:F858L/|m!HgtcJ?rQ_W{vh[JZ;^J [b+.<~' );
define( 'LOGGED_IN_SALT',    'KrjL5]w*0;Py*<,tx+n8.}hEU[bXo{h )@(C6AhT;g.]>gG`$sS&1Pq}=d5w5N; ' );
define( 'NONCE_SALT',        '^-)0=%[*H? !nDn=K~;-j#1pfE YS=QX=q&blnzoEZJo1JHCT}G;AM|]uwb_zJT0' );
define( 'WP_CACHE_KEY_SALT', 'wJP E0CL(LIFa4cS~e,EuKA]SdsJuBV66>S]Gye>wMQ*d7%O;gjqnDbl^ 2ppG$>' );


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
define( 'COOKIEHASH', '5ec94aac4dda5d29304b3c253ae3daa9' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
