<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

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

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'Ib|y`%.W5(wN80rX=OjDq3*ZBcX|@#oL*?U]Qye3s}[B]g5X$7La=~v;:d4g9|7u');
define('SECURE_AUTH_KEY',  'aAvB~j4Y|_gRv;biaIioAKf|eP..l8nf@/-Da+.U!IWu(B0eny]~Z@$)904Jd7h|');
define('LOGGED_IN_KEY',    'IU8(?=t=ApN4_:L0L-gL-(q#?C^WUg*_n =Qe]Dw)dmW3*kkwF>k(0N0E)=F-d.2');
define('NONCE_KEY',        '$sp.h]*nb?G4`Lf60_K[SOen|-Kow|gOwSk{|J-~j|%936,!SY5k<CTu@>0zG/dQ');
define('AUTH_SALT',        '^FP6t#/g<HL,ZC9`FQ8%{=&CBLqOMz2F*CD$v)eU||p)mbk.}zTnn /#,:~_<X:5');
define('SECURE_AUTH_SALT', 'sV%z#ml0+^BHp*:-D#+Iv>c0J>IAaxeM[/8Qace fxGQptz!{1BVy0f47}1+b~Ic');
define('LOGGED_IN_SALT',   'HdP?~bFJ#f.hb?S*}-p2| Z/Q:qF_sqMoY|fsX!xt~Mhu10W{,Bp_@(mV8|@IW?H');
define('NONCE_SALT',       '~wk0tTqHhGF!_1f+kq3wXc!.L-+`#NzilXbTwAT-MSpOe>xYeCpW`2hN|m)Mc-f/');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'AC7b2ULkZW');
require_once(ABSPATH . 'wp-settings.php');
