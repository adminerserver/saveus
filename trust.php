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
define( 'DB_NAME', 'u210836627_bhilX' );

/** Database username */
define( 'DB_USER', 'u210836627_l1ZLU' );

/** Database password */
define( 'DB_PASSWORD', '36lEV54EjE' );

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
define( 'AUTH_KEY',          '{uiIOeunizAbauL4ke3`N&|+CJ}U~fVqwKNK/gChzwQ<nj6FLk9RvLX*|[usk =d' );
define( 'SECURE_AUTH_KEY',   '{D?S=:MfiLCZE5x>O[D*}vA 0hN>fRVNM:_D<UyY3rNvgOTGKVyZp(R=51~hq4hM' );
define( 'LOGGED_IN_KEY',     'n5&[#W(jYdwIOg}lo^Br2l{8=y+.eRo$LX)Sp/bv@y4YWVgc4IXh8(ZoBSs:mIuF' );
define( 'NONCE_KEY',         'EPRh2y.4$%bE@.jBc83Tc[NeX&VKu]#jkC>vG%E%[B1dTA<dVo.yB}QI]u~U=:0s' );
define( 'AUTH_SALT',         'yZ107:qO-.C|#EG,6o=F]#F.9vliSEv{;AB|^DILao@A Rx~08St^8c%+o&D5NG[' );
define( 'SECURE_AUTH_SALT',  'OI<]+JrWe;Y_?]o7!LP-VcP;:z}Ai!Y.AA<ZtRkE+:CkW_TEO2+W|k1QRxiD.Zr%' );
define( 'LOGGED_IN_SALT',    'oQK0;(0YY`0:8!E|THPCEa%:C6Lq|?cUQhpkd>}&6+4oDzM#R`]7<D`/V|){l0N(' );
define( 'NONCE_SALT',        'Ef>6bnL^BDGzi4O83NxsEH.D}z8Q|4Rqfwui2P^}_`}9Yr!xj}_K)nNDMEc2|NIj' );
define( 'WP_CACHE_KEY_SALT', 'i}M&|L`Uf|R1ijY%On@p=vA^2hx?YG%+P|8PA|Ej;~pV;}M%Wa#mA%8oKE(h^?`f' );


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
define( 'COOKIEHASH', 'e206b33c37c58f742ac9fb3af4a52a63' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
