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
// define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'nomadsun');
// define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'nomadsun-lux');

/** MySQL database username */
// define('DB_USER', getenv('MYSQL_USER') ?: 'root');
// define('DB_USER', getenv('MYSQL_USER') ?: 'nomadsun-lux');

$local = False;
if ($local == True) {
  define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'nomadsun');
  define('DB_USER', getenv('MYSQL_USER') ?: 'root');
  define('DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:  'root');
  define('DB_HOST', getenv('MYSQL_HOST') ?: 'localhost');

} else {
  define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'nomadsun-lux');
  define('DB_USER', getenv('MYSQL_USER') ?: 'nomadsun-lux');
  define('DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:  'Xt0fCcQbr3uBbGCYWUWJCrQZ');
  define('DB_HOST', getenv('MYSQL_HOST') ?: 'nomadsun-lux.mysql.eu2.frbit.com');
}; 

/** MySQL database password */
// define('DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:  'root');
// define('DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:  'Xt0fCcQbr3uBbGCYWUWJCrQZ');

/** MySQL hostname */
// define('DB_HOST', getenv('MYSQL_HOST') ?: 'localhost');
// define('DB_HOST', getenv('MYSQL_HOST') ?: 'nomadsun-lux.mysql.eu2.frbit.com');

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
define('AUTH_KEY', getenv('AUTH_KEY') ?: 'r0RICeLRCJk/eMtgBDCKdRQ$<0Q38h|7Z,V7G~IrMT<tUw.;e,amtKHl`/~|[c@M');

define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') ?: '=l`Zl KYD7cB21Gv,ilhC|;:^WRJjg}TUAkc(xH7IarA3d;(cWme6f3y.wgi%O0H');

define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?: '#,t1{gi~p2y~bkoad}f13VjO27Tgp-ZjA?B6)x/w>,vnXvQU#XVqyh1B>l`^lVk~');

define('NONCE_KEY',  getenv('NONCE_KEY') ?:  '04BB#eI8aMHSNIh/Q(/v5b!~6sjN&3jydfw xe7t]n j[JrWohjZ1[]tWk!Rh@^Y');


define('AUTH_SALT', getenv('AUTH_SALT') ?:  'uzW DQ> L).HN`Ik|f,[^4jmscR~UG1[vhlO*30 |hD?`DL4S3=f|F^T:&6<Sk~A');

define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: 'E[ILS>+2N*t|UT2SRG<sOiM!$zjTJaI(K&6al60 o&d+7Jkggb%Yt`#%3zuzN*]C');

define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: 'qE!]]>VR+Q:grHtj>6K ?(dch040#&i(zaJ5+ansiym1=?!^zcM,[luvdJcL^/O$');

define('NONCE_SALT', getenv('NONCE_SALT') ?:  'KEr7Ju7E/:}OydeRP9TtZG+=:]gJ*yD{rIIo]=/.^ME30SH+x/gXt>CK&2{MiCqM');

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
