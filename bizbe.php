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
define( 'DB_NAME', 'u210836627_5U7sU' );

/** Database username */
define( 'DB_USER', 'u210836627_GDvRq' );

/** Database password */
define( 'DB_PASSWORD', 'gKsU2zvPXV' );

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
define( 'AUTH_KEY',          '~X3!9GrxL4)A-w`1yT6[m_g|^ s:j.lpGBg>6CANZq^c-0:?+Tciae4(1lkF^{,]' );
define( 'SECURE_AUTH_KEY',   '(3d8r/?-o/g32tRu|tsG?,2,4a@gc64GZOUrz8xAGy$1$eoL.~MJUwjeyOs :BDE' );
define( 'LOGGED_IN_KEY',     'I` >][V<dO,Vd?=g2[?0A.c>*6#|(1P6#?~}3[]UT2,Wg<4fTzy:Um;K;h6^%,^H' );
define( 'NONCE_KEY',         'JN&@Ah;c{yW8s)4 7*y*)pN}FG|Wf-nhU/I`BEG#7RbbC`{[l[b htyzqjM#dAxz' );
define( 'AUTH_SALT',         ':T?Qffh-$lF0Y,UK=#E?qSA1s|[Zh1jSce9t:(M!;ttgA|a?B~H43I0_<L=|5QW:' );
define( 'SECURE_AUTH_SALT',  '!`R#i]pEP2>?:TksBKq9[=,l< )#,;_4u]o]ko%E`B%mgFHwD}*kLE8/toIwSwup' );
define( 'LOGGED_IN_SALT',    'gi=0`-uDbg7+*4)Az!e(L@.D){bsMrodse&-9RCZ7!#-[[9$gkf)&[ol:`7g!VD{' );
define( 'NONCE_SALT',        'UNcUNy1= &&?iPp-q0{M=HlP$=znxv{={6=($Ni^7{vB;=NSqaF<F_0/C6!2sdW9' );
define( 'WP_CACHE_KEY_SALT', '{/-x-,2wZ^K(]jYlc.Tb2kzWxlT;|{}$IhZ9H%U;*_fz6z6c0}=Dhz#LBqfd^A=&' );


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
define( 'COOKIEHASH', '9adfd38b8e31867bfb09bafe2a709727' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'DISALLOW_FILE_EDIT', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
