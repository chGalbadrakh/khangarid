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
define('DB_NAME', 'khangarid');

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
define('AUTH_KEY',         '~Z4@GL FN`_%a_HF)GADT[x~M4%AV;qwB<N`GT}:RRYlc3K*z:]#~~*0A5XhC}Cq');
define('SECURE_AUTH_KEY',  '2L#po!+nO1$GV+rA_bZ-6En|~-9wj9(e~oY,WSc2!fjos:@DS!%<@FeoLmv@DNr/');
define('LOGGED_IN_KEY',    '[Z. PP%DLJt$y10 Ri:^FLFt/CN>hl2oN#X* LXK-5n=C`2zRf&XjrY ^yLo_y,}');
define('NONCE_KEY',        '^qSH-qAO2f[eM0,5T7K9L?BSiKx6),CKG>EB26h|xI~Qn79PP2KLdyoF0Dm4r,sT');
define('AUTH_SALT',        '9mTq}Nc,}li_tSq?l7ZBiISKDBE^sjOVziIj_01FOO?X:*Jy.cRojLFMZ2]5^T1/');
define('SECURE_AUTH_SALT', 'I`8:x^8O07GOQ&K m4F]5>a6??G <s1#obVl=g;*/[c!UscM/ja>_N9&<D[dpQz!');
define('LOGGED_IN_SALT',   'Bd4dRf<f_/4wj]{-yg|ove[KbTD<7uf+xD<)zC6zFSqW(,1-?U7xc~^)>x[Sttu{');
define('NONCE_SALT',       'Q&.7buiBX&6HO*DW41Ro1Dbd1a#V{lC#?YT]VO3*1o-UJ~/v7E1a<Qr/g44_{V(*');

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
