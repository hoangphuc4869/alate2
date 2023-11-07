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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alate' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8gOZyLuK-9fzGvlK~fWKfPj=0>sre^bJ.adaP3N>cGuM|3-Sj$LUNV`,2c@%I<bR' );
define( 'SECURE_AUTH_KEY',  '$ncLEZJaC?*I/2k#A%_a:9D+7O1~5CC`%S8T:F2f!TvlP@cR*fK G8v6zIM$<kN#' );
define( 'LOGGED_IN_KEY',    '8.XN2[MqA<PdSv2}06%`#68QTk$6cr#VW7!_k<[u9hMzf%KWcn8h*83Xnt>15!1q' );
define( 'NONCE_KEY',        'O1N1qn_CPOj_H$z}BLCe(e%3.8]Mv Ua]SoIkXBVX]9JRIsGrBXugp{Jl>}Qt1u,' );
define( 'AUTH_SALT',        ':=^_ei( 9B=1ez`IOD_H$?XOVX>fIZ3J&ty=A/=60<n|:1up_.z3MY7JPzx,T|N-' );
define( 'SECURE_AUTH_SALT', 'A]2/M!*{$.!cuV68IED_<W{./>/VagN9gn-MeHAa*=]~hoFp%jpRr?^e{d9IT4lt' );
define( 'LOGGED_IN_SALT',   '_9v#=:F5P$hll!<&tED+ClNKa!w>%$M4edR&,:=:4#X;P*vRah]]9~cLq:rB3FIA' );
define( 'NONCE_SALT',       'GAY*nkk~tO/id%@r_[x}aBJ21%9OYDG29s#TgS~D/WCb}0bekCB$Vyu/Y^/Ho2re' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
