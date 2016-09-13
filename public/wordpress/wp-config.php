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
define('DB_NAME', 'nlpt_admin');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'vAJzp 6FbA&Dxyo~Kmvo@GvzuW_S^B%oF-^i,A>qA~n10 4bAPT7[hXDG#Q7R8U}');
define('SECURE_AUTH_KEY',  '08byL(`)uox)@0IR8DhINo=CvxlWN67:Ld1jz##Nf4$AXK1wyZ;cOv);8^2S8(B|');
define('LOGGED_IN_KEY',    'E( eF;u</Gl5m)A])rFSH}4XntJ1Xv6TW$}ML.5xt]-5fGy][pGHfrVyHP(V0<Xp');
define('NONCE_KEY',        'f2&&35 KgL+fKf4]B</.qi^6>K/ yhPw}/&NNV_OrKnhUG(U@0~dU.3<v-iw%oHR');
define('AUTH_SALT',        '$z*pd-Y.{US.kl~QyHSV5;h(-ChIp[mAyqN)i!qRUn}EI$x>MqCfTdukd,#GOPsl');
define('SECURE_AUTH_SALT', 'k5|Gsr.!e~W=bYXh#aNyH cEH7G&|y06zwyk_mz]J?)j*.<TkbV6j|?Oh,J]_Zfu');
define('LOGGED_IN_SALT',   'n3?3As%.k >aC+}o0-Tj`p)]2ug]ZwUkF<HD.Tr`!{]4ctN=09S/siP*`AVue@h-');
define('NONCE_SALT',       'Ow 5[R>P|i;Jz>AYD )^GHF[s@W**zl@z]^LBGU9f[oygo<2W5TdRwiDAI{(obEF');

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
