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
define('DB_NAME', 'tasdawc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3B}~_]9HmgYyBs|w^T|[WsM_:bKJ>/pl=wX<[l:C14r@;nD_sO.YGVFiF)7`~%[n');
define('SECURE_AUTH_KEY',  'i9S<q;i/x;m+&toc!GZlL|{WV`dK)O|jP|{mI-z*ZFw9]Y&9K:,m$;qb,|po|Nr=');
define('LOGGED_IN_KEY',    ')&R$|9 ~|*Nsd3bq@ He[KA9E 16IsG6n^8`FG3REHJqO|=%&|8B_#sk85G EfR|');
define('NONCE_KEY',        'u7rxJNx;z|QUmUXT?pD|Jh|.OgF}-+!Ndn`(wM6igZiLstP;-*uvq_}xgc,EK1O-');
define('AUTH_SALT',        '2n8!<I>j0Ugly!15<1Ww-s,-a=7-I|r[qRtC6|f:>o_qQtd3ounsp9Yf-p-8~n8|');
define('SECURE_AUTH_SALT', '_6Pi1kR[A+,sAe+#U~T-;|Bcip/y0qTWw=rm<m7d4LOs_q52rABMEAq&LuZ_N}A}');
define('LOGGED_IN_SALT',   'ho,:tW,3mmi-N;`tpz_F98/IZkN N}wH`8<s1l4rBytiDv8r;I#]!o1/;kjN<z*q');
define('NONCE_SALT',       'L9>R^@B1;BT|)F_ipfErtupWhk7rf+)Pe#67Z]#kwEXR.OA:2z|t(FlO>Lm}9OFG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
