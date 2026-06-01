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
define( 'DB_NAME', 'u210836627_SNdF5' );

/** Database username */
define( 'DB_USER', 'u210836627_4swdM' );

/** Database password */
define( 'DB_PASSWORD', 'oGyd3)vq{*' );

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
define( 'AUTH_KEY',          '-<[]P}^_jN|*ELw.,=O38O9fE&SwU.:.Y;,(mf=/}WkW~8&* dW,x*suh*J<FR9w' );
define( 'SECURE_AUTH_KEY',   ' Jv}=*6V5&AyoLOqiJ`}6$M8HM`f}h/Hs6.f_}y1j,u~}qo%2V)RnGccV mA39<W' );
define( 'LOGGED_IN_KEY',     'T#e3zA~xS{W>PD?UO2d2f^+vzU{~}ehX~E_jkul>`Vb)>=~ ?31xp/psiOIc_n.=' );
define( 'NONCE_KEY',         '$l^f!RZMp_U`eDKYX);~;b3O-lU)+/S|tC:VF9dbL.V^+zr+fClldS}5OZ+{HCl$' );
define( 'AUTH_SALT',         '/.(z}~XmPSx{AmH|vu{HY@,kJ7*c>&Gc^Tn[H_iSgnq2Vjj$v_g$bi2C$gAu|/mZ' );
define( 'SECURE_AUTH_SALT',  '73D:_`Tq$Uk9,H?vg:se*]SDG|dm<koH((E}g&C0aO[WD4):+6gIW.l?C#Jf/jZ:' );
define( 'LOGGED_IN_SALT',    't39Oc4`uQ33-p,S+=|:aUi!iXea_Ec@gJ{dKq-MsgE0Z >.X^~M65u0Sf[}.>th`' );
define( 'NONCE_SALT',        '~V70V=$TfHKb!Fr%Ys[)+HeKQjR9j=&|8.a!9*K(A.,y79EIZyM$;X;>3$j?+p!i' );
define( 'WP_CACHE_KEY_SALT', 'MX2l8hdV{b}N_RIk]f( |U5P|_T9@87.j3JaKHJ$D[F&58mUS43&oIxj?4[kfaQ.' );


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
define( 'COOKIEHASH', 'e183122ba3a966a9845a6d4e6d334d08' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
