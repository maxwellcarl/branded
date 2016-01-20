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
define('DB_NAME', 'branded');

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
define('AUTH_KEY',         '_-=bBKXRu^#LynL~w0S7(AF[NWgoVO$LeXuAsZ}cw_>O2 Cv#/e4r=m53H{jVWPf');
define('SECURE_AUTH_KEY',  ':0q:(KDj4~w-@JD<w2u%5B lkIdi!8vLNn;[..=6T;Z}OsLC)1>)}9?*R4_s4&pn');
define('LOGGED_IN_KEY',    'hq!D8<ceZ*)r46WzGJZCV%S_v|;x74NH2hJzP.dw]^qTy9GA;)-A]-M#^j=,zPnv');
define('NONCE_KEY',        ']#d:=xX8+e.=lg270Tx1`qH)JX5JB=E44*wt;$v5lOi#hr4+w=NKV-TW?X#Sxymp');
define('AUTH_SALT',        '00nZPi`65ez0UNwKqv;fxyBa?r4,U!(`DS!DN<L/&r=-E/Hqo4Dtw{Mex,y ;^_%');
define('SECURE_AUTH_SALT', ';OUge)r7sp!=0,.,bWR+.SSmn|Mj#[r!{/P~|P(#I?8T`X0s}S[*<4mBVti$APN<');
define('LOGGED_IN_SALT',   '>et KiJzo:MjYqe,G!-E}B*`3T2^Aa,J49UOi6T)24]Y_OAnJ/t}b({A]Ca%}w4q');
define('NONCE_SALT',       ' 7p3y4$U^ <.[^t//v#~%W|%}+t!ra&J~zmv`gLsXQzfgOm;(lVzaWg6>mEP2aI)');

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
