
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
define('DB_NAME', 'hello_db');

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
define('AUTH_KEY',         'Hd:~6CK!V8PM`ED/4th%PoEP:y&La7~VsFAM*}Znk~BX!zrcK/?^DOr,S)cU!pS4');
define('SECURE_AUTH_KEY',  'aQ|a[]4.uPHZq@%83w%Fmj+WEk;LruSl(m;Do0-z~j=:lS dk^V@yQU{qvc(pJS~');
define('LOGGED_IN_KEY',    '<7@,n%ek$}9RJh/U4iX3+1)JY_%yZFLJ a+csLX%1uQt,N2xtq&K`qYeu9_f_@R6');
define('NONCE_KEY',        'RMJ/7#SeBIPeFIGI3ou#7Xw-?IL#&.233._n[9;Jqc++w_+;9SL% }IUrT6$i<hT');
define('AUTH_SALT',        'k1VN@3bKDXf@CNraPmPSHO:}{(2W{}py0a1{;W~W;EKKPIy0]A3$w{skZ#36(&(J');
define('SECURE_AUTH_SALT', 'XI$|iUv1zS3H:obve<la,k|S#:)P7mr3$KJgUll`5{7ZX^U>9~A< ^!qM*V8Y44E');
define('LOGGED_IN_SALT',   'u)B)W 5e,DW@-8aR#G%8w+xqY)zwEGluI >#dCqj-2ou7D)8`:ypiYJDL,Y7/{~_');
define('NONCE_SALT',       'rajc^R9uzISu.ufOIQ|<.WWy:l,o_?{ZWsT7UOuq8dE6}S,|30Uo+nu&Z8a1LC*8');

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
 