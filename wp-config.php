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
define('DB_NAME', 'pizzeria2');

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
define('AUTH_KEY',         '2FeM^#CCw9XmUK5D6~|$F7mLMqG10h%)l=e5]#u[f&]x>l__S)tH{C`qdz</98bK');
define('SECURE_AUTH_KEY',  '{aC`gd;2dlVF,=*:JhN%1^J;ugAm/38<g=R+lHP8.A+6I52oc-*9ww<w45>_({a.');
define('LOGGED_IN_KEY',    'PO=ZjK}d3~sE_Tr3^7go_>:B=N4nYj/l[;1<w6Y!/Y#u{yCe8k_T@Sv3(5.Vl|W2');
define('NONCE_KEY',        '2+ d?pX13nj){qFB1_,|PBdl%n!Z0fc=CN=BUrVy^!0b!ym[R~@Cm{~/6|-ZZs(j');
define('AUTH_SALT',        ' 89OW/BVg4E?/(yf8WGvRz&oX~1jL9Kvl.a|QVO0abidGFu*5moXJ;Oo~?`ma|0=');
define('SECURE_AUTH_SALT', 'CCaj-S^sZ X=gcR<fc@.daXSQCA4^fs{1fBX0G9vOF[pU#xTp4 kRC~!P_adiy&g');
define('LOGGED_IN_SALT',   ':-LxboGztVle-Nn9O5dt^>1M79p`..MQ`fimK,x6DW}TFO,bqE2$)~:r0T1r8^[a');
define('NONCE_SALT',       'M/a$Z=9x%{YI@b{C8nh1&yLu;U-=CY]*>GFy9+*?,5[Qs+22W>P)ihaqV,}=<1fQ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
