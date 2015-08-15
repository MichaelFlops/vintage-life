<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'storefront');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'nqE(~?ZNbZvk+0XhJ;FXYRSv]vyb9l+lQ!9mlztIbH{qh>2C||Uad`D6Y?mYH}Fa');
define('SECURE_AUTH_KEY',  'fqwj;$o0zvuxurvL()Pv)lpb!=VUzxD2crMz,/9r#S[(b5*fgC~e<n)-t+,..TUq');
define('LOGGED_IN_KEY',    '{!my+d-z-ur![qv>BKjgxo|I5Vq&v:5g+fKdN|jor+-(^CguXIY-^5Lm6#H9>ZlS');
define('NONCE_KEY',        'Q1Zgmw5^|JA:e5,oo#bo3._!RM>le7XS~Gq60n%6X^?mIY9WJj.;{%QZWtcF+kZQ');
define('AUTH_SALT',        'Z6*9F5FL+LJx|lFbJXL%^m+70~:uC*?vj7<{GM+s<vZD~#JLo4_kNP Jy{oDK@]@');
define('SECURE_AUTH_SALT', ';VDWg*B3&=%:C=Jv^u?%0^Tjo0;~waU HF,VE3AW{+w3#<OyzHBS0feakV;x$+@m');
define('LOGGED_IN_SALT',   'ZY=o7k_D=xlx!<*2Nj!-/r*b_f.`%YWj>R!k(,nF}1|l%E_z~)|2|+Bd8@Z)h#fv');
define('NONCE_SALT',       'p{:+!xw#tmL)N)pf%XOS2|dO0a=-OR_T0Ykx$O2Tg)ACZT,%:mlpV>!0~o3p0-d9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
