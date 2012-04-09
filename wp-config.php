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
define('DB_NAME', 'big_wordpress');

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
define('AUTH_KEY',         '<_So?<`vgY`xM9_(-Nyi|K~l5e+SzggJ|=?9@ 0Bn c,,3BRn/x|dWM5kl +A)@E');
define('SECURE_AUTH_KEY',  ' YhOi_[@#Q0J6Qk52}zX!]o(QXe[+TjP,ETU*yc!Nnz[4Hmr#d5<LL;YYD?-sLbN');
define('LOGGED_IN_KEY',    'e$ml.;Ol5kF%v]R{;Y9i>iG~Nx(1Qf`+aaU1Z!P&s%%@o^)ys,iK(dwAHdW,;Dg=');
define('NONCE_KEY',        'pl:)^|[A6ZK_`n}!pm&7{|^Sm7Csn2Gg|<kqh1*H@-2C/fpCl6~R^e9iLF&9,dNT');
define('AUTH_SALT',        '|g68=y,Ke(py*=Y)(O*HqKy;YE/OIb[eSPyJ+FG0WrU}3Zv=S*|*F)`b$m$IOTAv');
define('SECURE_AUTH_SALT', 'M-MQUUF7Po^]l0Gq63]t&[9:T<2@G`tG?SJsk`L+$-mS9m|o3qXR=fQ;C(OOU$TA');
define('LOGGED_IN_SALT',   'nFRVVqQ-0Z(S_OR;q`1Pza$0q0`cFk.}v@u&G?+%eG#EI?|]uoDoOO53<4eB$-P<');
define('NONCE_SALT',       'a3zw+Ghqp|V.9<<3$Z)R+%3;ld-1-rNMlRky23ByzvC[cU!qgr}?fzV0qEKC>rC=');

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
require_once(ABSPATH . 'wp-settings.php');
