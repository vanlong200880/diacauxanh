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
define('DB_NAME', 'diacauxanh');

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
define('AUTH_KEY',         '_;xXx7VE]~.<F(Pb[/Xc$IIGt!H~(<fRo63n|}ja1 @<<;7Yo8.&Y=w ihp-Qv([');
define('SECURE_AUTH_KEY',  'KVEIbU5m8O,M$zDg,4GaZVDcF&^#c(9M44_h[7uqt_,EPgqh/VIy>8jqDu@CI5M[');
define('LOGGED_IN_KEY',    'FkRrtI0Q/oxB|U<PseO9AhB+[g$c3x2@nFb @Bhj)7zwcO=qU@4w?vebwQq528;>');
define('NONCE_KEY',        'upQ9E>=45vGcAr@wE TJx8#|l[5y*-{}tpF#r88B>1>#O]qsU%UJ v)T}uh%O(;d');
define('AUTH_SALT',        '#~Y!6uIIy]H+~Du*F]cgCwS1ahGG6cH0-kHG$ur:z-| YRisQBsCvT6b1T(e+^td');
define('SECURE_AUTH_SALT', 'y+-.m]k1>7Gaq[+c8v1[sa:wE06tjt162X?&hy^DQU|d6;-YbN6/~kE>,x-+[vu9');
define('LOGGED_IN_SALT',   'X(D.<QV}^1$yl!Cd&GaBar!GK&W=/5&VXSj+{zC`b21l`5VH8fAmH>#.UE5#Q,jD');
define('NONCE_SALT',       '>V7I@ULpGzNo}f;<vj5J1uv eB_+Y~jl@#_Y~6iuV[X}ux8)S+c`UOOyu$I=.3l)');

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
