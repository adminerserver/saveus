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
define( 'DB_NAME', 'u210836627_XEzR1' );
/** Database username */
define( 'DB_USER', 'u210836627_KlDdL' );
/** Database password */
define( 'DB_PASSWORD', 'TOvljTGF00' );
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
define( 'AUTH_KEY',          '0j7/fWY5(Ok1@rl1X;`_PWw(G(z8duaM!4~UI~P#Jl=Wap[[p*+m8Roe;[P2_C2@' );
define( 'SECURE_AUTH_KEY',   'HLjg[`cdzX5n_(@Tm>y0><P^e)#lKS{E<PK~}&9#L6<1+8sP5uHS;_v#>d,.,Tg1' );
define( 'LOGGED_IN_KEY',     'l;JBKo-?`H^$rT`|SEE#Q)`-09=T,.2@Vt&Q[&be^4Jw^I7eT(s|{m&?6@2-}T]k' );
define( 'NONCE_KEY',         'tB22Iwbh+ [7zCx`j3Z[^#6J]j Rix:&3(P$8,}O;@M5XkA,slqBUjoelVIy7(~6' );
define( 'AUTH_SALT',         'i?n#`MR(MG|,B?G!,M>1$}u)D!h+k+P?a/;~^J,P(AO=1dp2a?eo?U9F@H[5&RNO' );
define( 'SECURE_AUTH_SALT',  '~nd%3TQtOq/oh:ZmH^)BVMN)f`D-$017|3tsW=~xL1y^zva?Ppsk[te V+i9a3yh' );
define( 'LOGGED_IN_SALT',    '&5Jy#^/RT8zi?r)#Jk#B~kc`o<~Z*,Df?fH36o/fDPOQD:mR*H!08I07/3|5V?}2' );
define( 'NONCE_SALT',        '@`qhGJ6XV]*<zz@{8[O_Gn&ID=_8Y&b0sNrejmmG&zPP0?&5l}&!<T}%OBjfBq(B' );
define( 'WP_CACHE_KEY_SALT', 't%{#5Z)SCRF o+~Ism/sx+FmW|`wx{e@{MUR1A:3;ZNkbV/(Jie.wNYvDnesEU?x' );
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
define( 'COOKIEHASH', 'f7773c6a1f110d83861df291d0678eb2' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
