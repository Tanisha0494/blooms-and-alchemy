<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if($_SERVER['HTTP_HOST'] == 'localhost'){

define('DB_NAME', 'tr_bloomsandalchemy');

/** MySQL database username */
define('DB_USER', 'tr_baluser');

/** MySQL database password */
define('DB_PASSWORD', 'v525E6CsNRnp5MDV');

define('WP_DEBUG', true);
}

// else{

// define('DB_NAME', 'trose04_portfolio');

// /** MySQL database username */
// define('DB_USER', 'trose04_portuser');

// /** MySQL database password */
// define('DB_PASSWORD', 'VNwDn29L30kc');

// define('WP_DEBUG', false);

// }

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ps)D*-:i0KiLFO+m^y08vm^ue|sx|%u>>@B,) Px(-|6Vr6*h4;[$W~hcYa^RyuW');
define('SECURE_AUTH_KEY',  'uDHD=DmF+*0K8J~*mNx< #2?Sgm~G.OodKaDkrG1 Z?t]!|YE-PPEjJiMQxB{MbL');
define('LOGGED_IN_KEY',    '|[`6MK8+-[2oE`ICP@Y/9v$pW_l!Yw@o4!9t~w`Em3M-e):9[2ov3R]45_(7y)2y');
define('NONCE_KEY',        '!6X=G d[`o#rY!O^/rpPUV+Bnki-^3Xt~*PDwv!a/9CO-90.sq`jJ(@=d1*}DOtb');
define('AUTH_SALT',        '|e.mt Fp,_qij,bo+<Ab_> l$~=ke1XEF+3spy)2#5jpS-oh~=E0Va1~8v`mptFu');
define('SECURE_AUTH_SALT', 'JIn]$:%jd3b~B_WacK+?-#qhOwlO9:T]=L-Nj5wKM8ZB4>+6vLv/ITIR$6(x;MeI');
define('LOGGED_IN_SALT',   '4vOf0I#d&i-QW??@S0ihw~n mf6S9%WSNzb8Ei=A{6+pSZO{MW3]8~zW3-N]kD3F');
define('NONCE_SALT',       'CK=| tHFD%m2tq-I1_$m4)3UF!+]o,e+NvR#](<,xv-/ULThxuux~P-p:-N$JIJy');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bal_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

set_time_limit(200);