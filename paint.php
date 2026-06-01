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
define( 'DB_NAME', 'u210836627_OF0sj' );

/** Database username */
define( 'DB_USER', 'u210836627_UsISI' );

/** Database password */
define( 'DB_PASSWORD', 'uOe4wG7qKe' );

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
define( 'AUTH_KEY',          'v/s8[0-kmp3Ig&Zb5YrOq}#<E|p:>E||EyvK_]GaZ&VLfI%7~i w4XV%N.PN^j8S' );
define( 'SECURE_AUTH_KEY',   'eVDdw530=F~j##ieLa>,gM~)~>$$-V *5wO^(U&eFK*wYq|H(oEv5]RR|-!a.1Vs' );
define( 'LOGGED_IN_KEY',     'uR*a1r$.S_c(OehymGL;0/pW]5Ehq<SY`n8X?824^|z/9r9>UzRyoQ Ba<Jx%j:)' );
define( 'NONCE_KEY',         'Ij.4w3{|]kiag.uci_da/8u^0v_v))Xr68]#3[*JxA#]^J-!t%Y#d`V7+tV:Vg=b' );
define( 'AUTH_SALT',         'v3VB~Z%(-O]N*z^7OpI%zXE{MIa?hYxb9EQgrc9Cu?]K6;[id9 t}hcAqPQTy&Ej' );
define( 'SECURE_AUTH_SALT',  '$IFejG]=pG_tI2-bO3jaAbw/oeq3)2Qnj6l:%BpF7sjx92~k9`w0>i29;YkFT*Mj' );
define( 'LOGGED_IN_SALT',    'wd):o#VCCjIc7}[C)&A?y/,}rOibJGkBQ$`]O94D6k;<i:%Pp+!kPKz@0?][;I@5' );
define( 'NONCE_SALT',        'P)sf85S/z!@w6}<:t/b.~FDqY@g=0bu]/*+a;Yp(42z<Wtl#dFIYH4Yg=!c978C$' );
define( 'WP_CACHE_KEY_SALT', '6-t_wu[%Ki4/KqGesA0Fdf2u.o,ABytEE11H|!Q@]JeJ ah9W#%#!?PL_x+JC.$w' );


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
define( 'COOKIEHASH', '85a3bdea6f1fc80e583db5e553f7b1e3' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'DISALLOW_FILE_EDIT', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
