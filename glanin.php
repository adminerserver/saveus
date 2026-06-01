<?php


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
define( 'DB_NAME', 'u210836627_kVqyh' );

/** Database username */
define( 'DB_USER', 'u210836627_klSht' );

/** Database password */
define( 'DB_PASSWORD', 'dIFVjI9swn' );

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
define( 'AUTH_KEY',          'q2};B7jRqmCu~hwpJGBEjHZf;9&3ads<Iu9ka]!Da^ELT@b [Vs_q4;B`/,4v&$D' );
define( 'SECURE_AUTH_KEY',   'IJ!A{6C3LAHpj-3)WNu$C7VX_;BdIpAqyf,m[2VD!AxkjS!l]/y,* M3J|L=X~J4' );
define( 'LOGGED_IN_KEY',     '+j,c$|fQ>f=.ac(, uHY-WFn08vlV16<wgl`=D}DcX=:gG-?_)T7-NO#Kd5Y.0$V' );
define( 'NONCE_KEY',         'ah3NS,^+Sl4<_@{yNh5[)Q9/|G7+<7 ;H[Ry,tTn##YqND~/}?,mH^bX2m`TcQj ' );
define( 'AUTH_SALT',         '!b_}QY?)9.I7VW|FL. A!3:.lG^C~e!1AfZ8Zk}%npfhmM,&CLG{sJo8;dE%;Pk.' );
define( 'SECURE_AUTH_SALT',  'U-jgw[cHy#63edSyQcO-|35,q_B-+!-,[Ff-?DFCW`VIMl+A/,^l}v1!<9sx]CV}' );
define( 'LOGGED_IN_SALT',    '5 YuUzKeV/ygdB}UagHGaQm>+?@:Z2mF#&X%c7eTGSk1K.{<Q0aRP,OY|i]Ij7&-' );
define( 'NONCE_SALT',        'eFsVD,]9E36l*~|D$eZ4M1x$3N:/O2B%Tfm}Wv;j S@Xs9C=dlEPNCKy<hDw?E`Q' );
define( 'WP_CACHE_KEY_SALT', '[7Zo.9Ki?!)V}Ouo,ucz?Mt]>C #j%<dXo%QEbN.yGdPy&xrxwJXM;5i((7=Q1,]' );


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
define( 'COOKIEHASH', '6a802073cc42789628e1ad5eabd0668c' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_UNFILTERED_HTML', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
