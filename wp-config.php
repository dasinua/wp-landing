<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-landing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ') %rh0] .G$!(<5,@Z}O#yippSW<_]~P@*OI2=[; s^4?*SDS V+|*I.6S;ka[!T');
define('SECURE_AUTH_KEY',  'V=r(w8t:3^.j3jQ%PX*@M$~;iA(!2 6hv{5Sa)&jd][Yz9Ny1D.X>7R<^qy|L+|d');
define('LOGGED_IN_KEY',    'k>c5reIn~a8vl~6z@DXf.M2 {6yar7j28^!jPl2A]@6MM@`{mwgSem/mdn4p*F:6');
define('NONCE_KEY',        'ZFV]A:ibZ`?ax-k%F}+Yi_Kw{vD2v_Gw+JRErwA:C/uAz(_tb{e:=:7P*==*%aN)');
define('AUTH_SALT',        'cCk1W/yNu3t+->OF[vz5=_K]8T;6, z@h);cSC_(t;?phSanJ;N/u,k]H8Zl_y=R');
define('SECURE_AUTH_SALT', 'YK=mIl:[1BeylG)WT qs<(7;)tF?>?4G-yk[L3~[q[HpjzT!.u65OP1g!E4!&}8L');
define('LOGGED_IN_SALT',   '0YML5Uqw#S=g/q64h:.#8*kV)H}*7OU~b>Ey_UU2!?yHu4-QMrsW3dtD< 81$JrR');
define('NONCE_SALT',       '|0eeBGw+b.3D9QN:)K3jG2R::DC)sUF;A89Z(!,@vv&H><t?fZzdAYUH8q>Rhw&^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
