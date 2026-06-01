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
define( 'DB_NAME', 'u210836627_LbMIL' );

/** Database username */
define( 'DB_USER', 'u210836627_n9OU5' );

/** Database password */
define( 'DB_PASSWORD', 'NsETZSYhPA' );

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
define( 'AUTH_KEY',          ':HFB*!j)g7OY3{*TP;R$[dujgZq>Xw[#[W535>N7CXX_j!rg#l.-Y&BGL@)nws,U' );
define( 'SECURE_AUTH_KEY',   ')Su|j&eiBca!M:HYWIoEx]e{`r>)4+|#[c%.YZW-?XaYE4zm^Hi<$!y;.@)kP&nr' );
define( 'LOGGED_IN_KEY',     'fc&91WLcbALr@(}%n0s&/tU^%wq!53=N:d*tplg5I(/{9Y vNnW0Q]Y}}ZnMr;[ ' );
define( 'NONCE_KEY',         'y`vwmII&S/Q5V+}<zg,XRGl{uo#9O2:GwR>{n#MVp:n=rF*TP.1!&<[0zH0QZR54' );
define( 'AUTH_SALT',         '&UL0[cmW7E-eoBM)yygau,fs`W:{Vyk%aV||/t|j{;X!dN]P3<-DKf/u3aA,OQ72' );
define( 'SECURE_AUTH_SALT',  'w8QdJ8)k-U +yVEmfr}X)z}/vj3M4AiY=f{-r^be7#R^k)a{l!X<>&HX!49<Oa!~' );
define( 'LOGGED_IN_SALT',    '}~Bi3CoH)2I8apG*E=i:ZM(G`;r^(2|=uDwkmw!AA8BX%sQE)t02o;PV_ HCS~*R' );
define( 'NONCE_SALT',        'LE2VO<=Dkn{44g ^IV/GauRH=W#M7wP~tX-q8q0rmE:Y?snb;=)YCmI=%H.VK h,' );
define( 'WP_CACHE_KEY_SALT', ' DxC&%dRV(?iBD2L6G@7HjsY<{apU}~-Eq+IaE-j{0*G,d GR<jx/!xFHy_i0%R]' );


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
define( 'COOKIEHASH', '11632fb7ab913c1c10c504b51b7f0118' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
