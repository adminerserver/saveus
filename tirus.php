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
define( 'DB_NAME', 'u210836627_sXiOB' );

/** Database username */
define( 'DB_USER', 'u210836627_eS6ii' );

/** Database password */
define( 'DB_PASSWORD', 'afVDOAlvPE' );

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
define( 'AUTH_KEY',          'qK5e+wSmz49MDh!MRA]/vBOP}.>T1u)oAIUt~b8ZwtB>M#lkox Q<,ig(Ovp~t?x' );
define( 'SECURE_AUTH_KEY',   'eu9oXLA}L}cY{mJ5<qS`Q;I-Z9<F-OrG(@!j {dQc?yqOqN6QB:xdKV?^{)YpnSK' );
define( 'LOGGED_IN_KEY',     '22>[3^lb$1TU+QU`I%.rkkN+K*~5|?XS<csRHSq^lFVYb^:H-<XWmgFkC!ys77Rt' );
define( 'NONCE_KEY',         'd{-1O9&jpt7_^?<d=^N*>.jaz[K-7i=E}666k)a+?8`tu;p9CAS<9$u0|9hvKa.I' );
define( 'AUTH_SALT',         '!W2H63uK&bRaZM:XL:dS7haq,x:P~*pc6[I/zM:z}cKS5.K[2,lS!EfL ZS}zk~A' );
define( 'SECURE_AUTH_SALT',  'a6!c_|ygh..-BWE69P?8ijU}rm!_G)nSOS*qFSSzUoE!.:?h#z[XiL_8@+_fKfNP' );
define( 'LOGGED_IN_SALT',    'tgwLw2v$1<0Xxo6+&W%5?4WhuDt&]W6=*KQz(aju/Lkf&c<99VNgK-/TG0tf)Dto' );
define( 'NONCE_SALT',        'hqJMtD2x?tE~yy,s-CUODD~D{BpLg^1ZkJAhL:[w!4QuOLO`ia8w$m>j38E+;@B&' );
define( 'WP_CACHE_KEY_SALT', 'feL!s%U& 9DQW9ryTp|v.(>`^C`j ?17`SxNyx:JG}{XekJ1l=?pLvaI+.;an7[Y' );


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
define( 'COOKIEHASH', '3368fdb7c1094b956ae79b90162801f8' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
