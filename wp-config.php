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
define('DB_NAME', 'homepage');

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
define('AUTH_KEY',         'wwMf5J[Vb.|dc?ZYdM=fTST^0m}~eYmHz ly&k/M=PG6NM0Ib[313Rdayzt|%*g#');
define('SECURE_AUTH_KEY',  'Vd byF*ggOI+FTh[%L..yH_d#Q<nZa&CL*4[9jRb|d}WEb +4~6)A_E5?F72!AgI');
define('LOGGED_IN_KEY',    '@j(2&QAEa#.4V>|^G17ZJAas;EFRe,v]ph9k;Ii3QV{*6OK_oS9&?Nl.;qb;0Ve2');
define('NONCE_KEY',        '5QeDzkZp)#nhjA{1ztkM|xwsm]{|7vXsvf7>OC,F:3nkTcd2`Qd)`Fij,:>1TxBs');
define('AUTH_SALT',        '|^;Z@L_SK74`o/Pj;T<t(56cz=]w:z)ZtuK6n__HP2<1gO#eDg&HZXn7pM<q83(~');
define('SECURE_AUTH_SALT', 'A1X-B6FK|@;YW!/QB5Edi%,fo5M+2 DUr*`{&rkiAa,AB#bdqMmFB#)kLrVJMD=>');
define('LOGGED_IN_SALT',   'Tao?c/x8)mUXj4I}dCKSn#I((y`sd#_]YLv)Yz*5o0TRzRNm#)Mu}kRQwqg91j=y');
define('NONCE_SALT',       'GDaW<%UttO74cc3]?{~Nmz+k[bSUvP;F<4j,hI$vg6nPh&_7wTW$U-5mkE<jxVG?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
