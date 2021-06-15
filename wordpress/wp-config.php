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
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('WORDPRESS_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('UPLOADS', 'pv-uploads');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Bf|f,{s.?gGS0Yem3Gc(vDh$o|&wBW17d-dgV2_Cp)tj^YVq]ds|bG._XN/~KYT[');
define('SECURE_AUTH_KEY',  'G6k-zIaQg@kryOQiCzh,!+!EV_SoLBTk[kP+^mR2.gjy#X4R;2QDN0Lp8O+np87b');
define('LOGGED_IN_KEY',    '`2e&~6|?+#u$y{)(CKQ@GI;H2`0peHB^Z`hkqfgFJQcwcH6^r.8l[2m}Gv4>wzsU');
define('NONCE_KEY',        'c0/}hM-pvGM^HEZp&97z/72]1}Xc{O3Vfj,>H<%i*3C[#bhecBvHo${01;*U^9&f');
define('AUTH_SALT',        '8@,PP<o!c(]sJ30+USh@JLW_`hQ~`hEUf_Le?*ykS-<8E8PhDBBi}N-.pY>,jBBK');
define('SECURE_AUTH_SALT', 'SdqWu+kO9)3/2e[+-!NDjct-/.TKi$m[gUN@})U%k`QA,0QlaTPu1jy}#z%YQLCg');
define('LOGGED_IN_SALT',   'fB`.SZh4H#4D(l3o%=l9InaVww+mEtsDgnmukASE,]u>X}Rg)5$N1Mq/#wCQDelR');
define('NONCE_SALT',       '4Lw_a-4b~-Kv[{%SrkHrFp@DtXuWT2V-)=3K%fluw%A0Q/HNJ+*Z~euG%uwS0PM[');

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