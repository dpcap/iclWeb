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
define('DB_NAME', 'testsite');

/** MySQL database username */
define('DB_USER', 'testuser');

/** MySQL database password */
define('DB_PASSWORD', 'testpassword');

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
define('AUTH_KEY',         'LuI$5R[+%Nzv)/GUo=9SWNEeAgZ`9t_Qgmeq2$~&69A2I4ua^,0xhAoxC5u_87To');
define('SECURE_AUTH_KEY',  'y0$h-f.-;*Q,qc,Xc8m1A)*-bR7|Gn}+%i[9Hft~_N5V}Xly$>`}J*t2FfS7UO!e');
define('LOGGED_IN_KEY',    '@/O t.X8S~LXkH&# KY+3-~^iik@85+maa-A7xs;|&H|k^5](zywwvHkx$`y_W!@');
define('NONCE_KEY',        '-dc&Ed_i%C-LEKph?USRp!)jY4WLw`arz~8)na8ZF+Sd0>BF2sOi<=*278N[]0WN');
define('AUTH_SALT',        'rkv(4P<6v ?-4LJ$Xfi}^}3Q47(2J?0%eF:tN|*;4+InU0+hgnKrAjIe2<.p++oe');
define('SECURE_AUTH_SALT', 'ien844Q:nDALtp_Q=OC&c%QZ$cX%N cC&;7/XAK<vmJ}wB}l.tqj{3ZKajV#o<h3');
define('LOGGED_IN_SALT',   '!`d>U @-S;j+p<f3DZhb76|O+wNyJ]Jkz|`PdL-g7CF8{mNR+Ob6-efijUC`-#6u');
define('NONCE_SALT',       '}_F7]^w4jkMf,Wy=U5ak]DyBrA=5kS)U:D{Sg{ne:M|%rad:1tjTe^1$Ci1v!7Tq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test1_';

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
require_once(ABSPATH . 'wp-settings.php');
