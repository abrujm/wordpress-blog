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
define('DB_NAME', 'wordpress_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         ']lIT<d$jO}(iOa^1?)kG!.ZL}:pk>_0BHMYKXwDQWhL*Kx N<?VSL{190Sf4G^-d');
define('SECURE_AUTH_KEY',  'x/pOL.P{o(bcWWkmaYgt]c7/UMH&Fsh`w$BLhQCpE)d3SeZM_0i83,sV->?d`a?s');
define('LOGGED_IN_KEY',    ']FnWXpqUj-(0@X>Zu;v^13+,HVXQa~a(I:>OvkqZ&;`A7lhliBrdu>2#xTHd:osi');
define('NONCE_KEY',        '>I:]$K4d1l`5RsPeOQ{:JtoF+]eBA0:TcgKNNKukWqza=0<5z4[8!OscJ=+f!IyX');
define('AUTH_SALT',        ':X2(ei<3%Xrda8n@mYp~0uDkNXX?dRUB lr+P$._!:3y]y`Uf`(7(Ag!Hy/7fvys');
define('SECURE_AUTH_SALT', 'u6z7}FPS2dmRi Xo><Np4!Z)(6S4[~-/~n;DxE{!0bL#u?@M?--lQLRn$[T.}UIB');
define('LOGGED_IN_SALT',   '3V(7d4d2hO%OXJy 5!^Hui)!>t-Hq`sXT!=0}7QIKG3rc45vM?M!N~-p$Uw@r}B3');
define('NONCE_SALT',       'aB]sSm7)`X_B-xjmU1A]xdJw+So /)<U00,xf@<-Yy)5CGSr91]JhmuXp&fO<!U{');

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
