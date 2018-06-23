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
define('DB_NAME', 'munch-bunch');

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
define('AUTH_KEY',         '}0$3mO>EKm%oTGy+J4mWpxY)[i+;/HPNYwzpM|6mz/l](Y}ODLax$$m_U{TdN+qr');
define('SECURE_AUTH_KEY',  't0R6 %Gqw.lyNS*pJNxQXWQ&s3O@oD3`vKvG}eUzI8{w){`FjSuf0LgEa}=JoGvh');
define('LOGGED_IN_KEY',    'tw;[PbqjZK5jzbvF=NM~d|8::h+?59$uOVaUeIaL^_uul_Zl={@&9Z^4)`C:G%X<');
define('NONCE_KEY',        'pq88&[A&lO/T8(/?GzX]/=kI_L;w):<t,y#<Hh53TZARV [sf4N0Id0RHQYKL6C*');
define('AUTH_SALT',        '&uR>Y{3wr~b,>c?whEUN.`8~k3fN}GCkN8tPQ*)~FFD%qKYOHsNg`?3OENB&T5|r');
define('SECURE_AUTH_SALT', 'T8!%`v43}G#n.^hUW@~HZ5-]tq&*V4/Pq^G|1K&3F2R^7j*Jt1.mD06gTyu2^we5');
define('LOGGED_IN_SALT',   'Bm<mm?Xfy]|4RsdCTWhE}DyXedA/I_4~ek7-gf_J.He!zxq49F.]V1W;MrV5UyZI');
define('NONCE_SALT',       '*+,dvW(w:#~IIZpHh>Wd<KaT~K@3l>RWczVz}QhrjM$`vTpDxI3}65wole$+y%Z0');

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
