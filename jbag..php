<?php
define( 'WP_CACHE', true );
 // Added by WP Rocket




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
define( 'DB_NAME', 'u210836627_pRYbQ' );

/** Database username */
define( 'DB_USER', 'u210836627_dFAjY' );

/** Database password */
define( 'DB_PASSWORD', 'WHx96KcRCf' );

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
define( 'AUTH_KEY',          'yUs{R|0xvrfa9rK_HJgvn`HH]: ]ChCcqy|Xo5u.DMeufR;g 8KZv)T9@%MOs}^a' );
define( 'SECURE_AUTH_KEY',   'p/2c#W8iW;R~dGi5cut30U B-`lgzKsHrL3$4r%pTeZ+{WdD^fT}89L@@5Jm-g-6' );
define( 'LOGGED_IN_KEY',     '3p!cs>^m!24OPQNb?$>CevEE2P%lc?>w@lsy09&Mtu@P&#Z|xuhV}*){w]3Iy!Et' );
define( 'NONCE_KEY',         'IUl+ay<Z@#^(rFaTkLZaza*U_&ffU<U/eZ:8zA&Q=o%:S7g~*2Q<J7Nz?3_C//>m' );
define( 'AUTH_SALT',         '}WIFq#KF_FL$dC.%t0c6*CMmZm.]!X>rm<|.0-6Zk@<mq^KQ`%.I3H,f0zU6yM0X' );
define( 'SECURE_AUTH_SALT',  'hM?9>},h(f!bmn C&%hyiPi@),D*|_Kzquw<d<;]R3Y9d.^HX9uL, ;kcye:t[EA' );
define( 'LOGGED_IN_SALT',    'QC4tNt7yAk|1Z+>Q6TkFJW:E-fH!|4)mWJtYvuXA_2i-IMG?-*%mA,LTx92NT^}9' );
define( 'NONCE_SALT',        '_O6;AvJS=VN{tEEsWZ(kjG6LhH0 S9tv~!s>H#o2<8B:]Atv2FF3MY?34ZNf>@Yp' );
define( 'WP_CACHE_KEY_SALT', 'WBT/M]ETaoj@iFbb,9F4L4zf,,:G!c.>zNJzk8tM{@`??U`M#l3oC1NXwKZqSVHy' );


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
define( 'COOKIEHASH', '936f01060ed6e99e123ff038156b6976' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
