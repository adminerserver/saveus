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
define( 'DB_NAME', 'u210836627_9T4Yk' );

/** Database username */
define( 'DB_USER', 'u210836627_wm9Js' );

/** Database password */
define( 'DB_PASSWORD', 'IA15c0ccpg' );

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
define( 'AUTH_KEY',          '>I-xKoaJ@mV#}.Cb]qo6gNbb!;(2 cpmO>E;OKRz_TY#i/S*5y{k?eEr%+p>_0H|' );
define( 'SECURE_AUTH_KEY',   'NsuE5^?pyC>h:$|`w!L7Q.eke##U$H>_O02zJS|D8;pRqym95$egWx)dlfbb[Uct' );
define( 'LOGGED_IN_KEY',     'ebXA~RF.wO>?[!{+Q8FRv;V16K4^Ryx#hmAs2i5<OA*vSwLjQ:-Z8C{+GCE;T3p3' );
define( 'NONCE_KEY',         'TQY0`CO~8r#%</=:w=noRoTX_Tkd6A[;^+?):uiQU;y]`5hQe}=5U*r(<B^cH<~e' );
define( 'AUTH_SALT',         '`^YPXzk{O.]W;2Fa?ZP?5:j9WWwRUMEGrcweGr |Y:LK/Zj*_8<JC~).uGYvLS)X' );
define( 'SECURE_AUTH_SALT',  'N#lm}:.SF}f+]/kmMH#s.5GbdlyEt/=@Czdx6x@gkr}PxVvaM37Z}`Hc}UDhiy;D' );
define( 'LOGGED_IN_SALT',    'u(CP}l(&CJh-Mf%O]UI1-OY5[!%L;Q}i;$U}+7r*DJGF >bAYcH<sE>F4+48uJYd' );
define( 'NONCE_SALT',        '}vw4%CnQLb9n?*`!-XbMqCGP(@X|tw6#{WUs0Z6KvSWm4?%l#10B=_H#X TW]6{e' );
define( 'WP_CACHE_KEY_SALT', 'J&v+(0Rx88exquk0!ksF:q.keBm`-QY3zeb*Ou.Kue qi%]7]4HJCUK,8@5u<|H>' );


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
define( 'COOKIEHASH', 'bf015922d601f23e91d4a2e59e8bccdf' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
