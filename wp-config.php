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
define('DB_NAME', 'nextgen');

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
define('AUTH_KEY',         ']vVMqu_#u<jN29WKwvc?.^h:m8lsK-6aG%65Na0Fj8;I/l_S{lZBJy|<O7:#uOwm');
define('SECURE_AUTH_KEY',  '%#t?Fn]Ju-n%H$TyF)oG#>|8}T3(Q30/(O#T2JqZRBr^1klKfsN-&v}GFu*%xxoK');
define('LOGGED_IN_KEY',    'Dnbu5=P]`k>]6}FJdbFclx0$XP+Zcy]YkCQJGfVOsiX+K7[rgynp{=,w7Wvz0e:!');
define('NONCE_KEY',        '?3.qTB5^als]@,3J37q8Sr9-)c;./EQi7hq4<<V$i&U?DA,F~=(#`z|*{,ZG2SOl');
define('AUTH_SALT',        'qaAV)WTCB7r`a^elV2qIUw]/ #)oAS|;`QU.t#Q|N3@ubAv.peuO@6{D0XgXFuz{');
define('SECURE_AUTH_SALT', '9=aZ8$M_5}Sm9mKvia_=y7[NlrFmz;fkJXENmw{`l,UhtvqNEzG?LVSjEoG}94!^');
define('LOGGED_IN_SALT',   '<NQwj dD9~?DU7ZFxsW4tN)0R*@|J_z7U)[qn3;|Qf pb}DBD_jr$5zV=Nr]YB^5');
define('NONCE_SALT',       'P_w sF*p?PK&-$RgjS Xz$66 U0c$DED5g5EHmeN>9.9%+(5E?XH}4Aa^<z^Uu_%');

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
