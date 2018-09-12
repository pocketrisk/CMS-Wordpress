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
define('DB_NAME', 'pocketrisk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'oneclout');

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
define('AUTH_KEY',         'AI(yRy#VT3Zw$;o;lt+%Pj|*AjenPgvVeG|@D53,RvHc`QC^2wsbHB>rvG]sr/& ');
define('SECURE_AUTH_KEY',  '?@9jgk@yv*cL~1WUK$+*=Irs,SVpf|==|i%n2)-T)L?qn5>Q)NBxKzH{29>>yO3_');
define('LOGGED_IN_KEY',    '&n.X09E9jE<gl[_FCkcLDsU,{:>:%<B8mvo(9Oqk9?s/r(${ZxHS{nrl iVSF6  ');
define('NONCE_KEY',        'Z@&$;#E,[*US$T*w+TKd@JakK?6Oj]0dg7$^B$+ojGkF^sa?/o)[/[B$0##sMCR8');
define('AUTH_SALT',        '*^%RT~X9k|@;f*5#k`D}rb*eX{s1uar3/4#i(}jz:X^nR_Y#?_`R^!Bcu{9&=GLZ');
define('SECURE_AUTH_SALT', '.RFf&##br4st<brs*_-3g}q]521_Q_Kl?K]B<^,1R+)XGmMQ*,#EZsTklH7 ;@~Q');
define('LOGGED_IN_SALT',   'W)Mxoz=G-5O[X}slqejc*!XR-0p+:lL<,Rr q6TC)o%6q+Y~Z+r_-Ak$+Z$tc-Hd');
define('NONCE_SALT',       'U8<ol3>HPq[cWJL:>?V7bDg]Ky&5F4_+ x(eqgEh8<v3=PsGz];Z:J{PLs<3wZlE');

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
