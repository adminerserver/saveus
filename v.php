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
define( 'DB_NAME', 'u210836627_sP4Pv' );

/** Database username */
define( 'DB_USER', 'u210836627_GMA3O' );

/** Database password */
define( 'DB_PASSWORD', 'gjMTtGNJGA' );

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
define( 'AUTH_KEY',          '4^aW5oQS_p*5+k.F[tv{zKqp]3khjodb:HIuepMw@K*`x~KmZm=v>gD)~<)y>QM5' );
define( 'SECURE_AUTH_KEY',   '3nMfdb,jBCRvGLIm[#0%83*2`ynAg-TgXz&/q*P[^![q^$GzaRyYrYnFTEE.x^.C' );
define( 'LOGGED_IN_KEY',     '?%9.7V<GMrhP]nThN2]Sm,)~Iy> AO`t 3X;_5gNg*)+&P%h_U&w4<v8on<cmoU~' );
define( 'NONCE_KEY',         'w#%~Iy7 OKg}x(.;-EtlT+|I+f4t]2~]+Q}eyk>wwP5y]N;lPV0mX/ezD,7Wk%R*' );
define( 'AUTH_SALT',         'c8l&U2ttGdA<i=6vKFceVrjCy1&ed?Ngiw$)yJ*wC*I_cc<kxYUCo7EH}.a>}+q1' );
define( 'SECURE_AUTH_SALT',  '2Xg<K}Z%_JzP%C#2&iAG3ARCofuYY~o +{C~R&h{&;QBH+?O(hS!Uq4/(.=o*u&m' );
define( 'LOGGED_IN_SALT',    'g3/d6[TpO8B.|>klfj.@:=*]fkjdA<8t-3?.9gn%-|B yTgU~(6W3?1*0o],cPV<' );
define( 'NONCE_SALT',        ',7:I4S)Sh42G6fQ#/=4/AVDTiWIv>Q:YS,CyT)svDe~;@F8{Ztus.%Rq|*a*Yp2T' );
define( 'WP_CACHE_KEY_SALT', 't%^;VEykPh@G:i0VND;rG)O|4uwPMl,Ztk}v,aZ.v}c+~qn;)kwFFFj$erqiLioL' );


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
define( 'COOKIEHASH', '8ea25f30c0fea407d48878fede4d1c8d' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
