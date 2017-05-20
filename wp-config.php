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
define('DB_NAME', 'woocomerce');

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
define('AUTH_KEY',         'qMs*#~1v0{H]]Cdacoh&%NP7f<7yh0ss)0rcQ?}&Cd)K4WtZ*_T5]N<O^HIcs/1:');
define('SECURE_AUTH_KEY',  '|gd`Y6%uip!;Ij[Wcs<X2Fh=u6J)=IajMr^9agkC5lwVryr_>C$*ZdBF0<GP[Zl[');
define('LOGGED_IN_KEY',    '9>;WW~OwihI/@,%uyQw7q.@T)lh!Ex78f<G4O4B5PTM=b)Sv5pz)$9X7+< fMj`)');
define('NONCE_KEY',        'j~n?wvj|L|E[z*G>gL,HG1fNkG5r}-9()q<zXy;SPOZL#8VQ>u*<_6gmR/HE2J)p');
define('AUTH_SALT',        'Sb3@E+:f_g}=E+OY? lIpzWI;mTVCJ,1??;zEmr@{8~<d99zD~d(Qk}W4s+5VAE}');
define('SECURE_AUTH_SALT', 'Rmu%jDOW7@9K|>qQwn<|wwy^ea=##*n_8Vb`u$H$oNJ#<sJ@5<e7< -!lia/MA|7');
define('LOGGED_IN_SALT',   'W(9WEQd8jh!v/7>[YM!U]&*6,6f6J)Z..NS8?T_]pE1Rp^y>./w&MJOny_+=_D^c');
define('NONCE_SALT',       '?5abUEf55pvOaBK_7>PC*;ZVOouBB>$51U>tZ(8E5DA:=r/~e:JK_GZ6Eq3%7x~a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wc_';

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
