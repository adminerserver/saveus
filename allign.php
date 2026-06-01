<?php
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
define( 'DB_NAME', 'u210836627_xevmg' );

/** Database username */
define( 'DB_USER', 'u210836627_aErUq' );

/** Database password */
define( 'DB_PASSWORD', 'yNDOidNBnl' );

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
define( 'AUTH_KEY',          'rAi;{CY$+G!/Q/i&}Q11*>(T@yNBeVF}utcX]{*fN*onulwQsFU&re}RdPc?9dNr' );
define( 'SECURE_AUTH_KEY',   'qq^j(VHZgH3[`_m5hj][6dH aPn)Z;SQ<4=uYw6[8![>s*f$/sH</#1hMLoW?VqO' );
define( 'LOGGED_IN_KEY',     '6z(SFBs-^g1iX:v=1_.z3[jq6Rcv`{ExTzW^wp2oMxVxYF%:GmX*lkzaRsE>OAjH' );
define( 'NONCE_KEY',         '~u#@~q9dx.5bYy,|&OvG>QU3TfW*C1ktJmW~.*GL 4i9</H9YkHaNs.?3rYo0[dQ' );
define( 'AUTH_SALT',         '7QjG%sIoBazPJGjOO(2IHMO[&cNp=po8<bvdLJR]6*O<0r8b%L W=shRt119zC{)' );
define( 'SECURE_AUTH_SALT',  '#)|_)/oIJC-Byow(N^MGz|2rDfOBQB>oFqC)0kUh^sqX86Tah?j.$wTcMcT)%_ir' );
define( 'LOGGED_IN_SALT',    '=(+cNJXO2ZfqO0!B?iUNYQ>1b[awU6P)i#FvfazZ1;ID3T:BZ-NqGx&8?viSd:v(' );
define( 'NONCE_SALT',        '=HZ#s(I gZ2,C]t#;|@/55}}U~F,>&4?/#KB3bxs5^_n07_Y8#tsl(v@W:+p-8cq' );
define( 'WP_CACHE_KEY_SALT', '|e3A<Cl(:vY/qJ= =jV}+ofFtV?]s/pczz$:-VjUAGr_/6I bor*o;s?#.kSsD4G' );


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
define( 'COOKIEHASH', 'cce5fa90db7e98a1ec981523c27e3fa3' );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_EDIT', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
