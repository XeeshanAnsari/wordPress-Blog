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
define('DB_NAME', 'wordpress_database');

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
define('AUTH_KEY',         'A-#`,IyP0Kn@CL*_v.79~UWrpJ~,0b2a;u/|_O(y%[M6dO`0jEZ<p!-p*.$6z$JL');
define('SECURE_AUTH_KEY',  'h|40T_~ozW76PEuT_n{!>t/Q66}4:]NP7<ahuUXLi@,!<(CO%Mz@3{g&``]!gTcy');
define('LOGGED_IN_KEY',    '2_6e47pE_dqf}yQ>lY4Ss|QJ{7+n}:W=GAe 6ZlCJ9F/B/,^7 sMowKR<}fdmVaR');
define('NONCE_KEY',        'fpv?d1{9R~sIIixho,#9?0y92M9Z~4vmm?;U0.tIz;lzg#Oo0YOS(P4O)/S5hC>s');
define('AUTH_SALT',        'Uvi2{y1]nuc;n4sVnq?h*P;V|:hXj/#$~f6W[w3FFI/,b=&9Tssp>)U|loXI?9h!');
define('SECURE_AUTH_SALT', 'oGkyK-ry99:-;ad{_IMRw0D;;Y%F3DOO<o{Lex#>hy>voF3QO10/L`TqgF,75tEX');
define('LOGGED_IN_SALT',   'z{x?dx(^A. fN/JGgb0O|coCt7D1LOX-ePB{_2:@.?u8oHwFHJg)7qxX7K_dc2`C');
define('NONCE_SALT',       'T1i1SDk_*IOL9wo%jEy3D0Z>9?5TDCcoX<p2Q?O.>nJQf#y)qKbaJ_ME&c`n,8hh');

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
