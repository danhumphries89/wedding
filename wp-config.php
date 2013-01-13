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
define('DB_NAME', 'wedding');

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
define('AUTH_KEY',         'h*kZQ,1]!#}T)gD* |s!Yj;SnTWEtDkg/fH]5C;h,Dx+&F9`De ~]hyWPy}wq]n|');
define('SECURE_AUTH_KEY',  '{`_ky9t:fTw<MuRw+EUmpvpq^{.1$%>[}i=p}aCflV!M#,d7-v-5l+.A!8le?C>h');
define('LOGGED_IN_KEY',    '!qwu*W?J?NF46ww5bgE-a,zx5GLAD1owYWx6!6+|R`>G8_u&OkW8jpwWb5+3`O[H');
define('NONCE_KEY',        '68P)?-Z-~}i`7pe*a$D6dV?T*kN2jU%4[~d_+T/j(?bo%7t[0!o1c,F31)z$Hf+(');
define('AUTH_SALT',        'U{BjX`kiL0>y:/edEW{fXtN{8Ith+|Df5Hr|f}(FZ:W97ARQ%*{Iz+h6UdQ5|7;w');
define('SECURE_AUTH_SALT', 'PhPz5Pufn+LR,qb;=f@$jm)1#]co+&$VV-N9E#R3KHIm+ihBI$juZwB&2l`^sVJ.');
define('LOGGED_IN_SALT',   'e7_ZH>cMa-~Ona$:06!F=%lrGojRKr-]5M#H!XZsfOW]~:KJt=F[<RgYktpgsa~>');
define('NONCE_SALT',       'xfn/=Kfrr648L^b6.xH,*s+h+`aV3A&Stno+I1bCQ;8xvn,DIdh+Nx+Mj.8Fj~3G');

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
