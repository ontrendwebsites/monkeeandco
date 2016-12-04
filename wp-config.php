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
define('DB_NAME', 'monkeeandco');

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
define('AUTH_KEY',         '`|z9Y{~>+uV<}lR1n#Oe=`Pi<R+ SYRLZ:qWcKw dkUp}a;A;5)#SjF:N[<.p#V4');
define('SECURE_AUTH_KEY',  'bQYN!@zJa+Z2e,An^D-F 7Qe?^@w+(@)9dO|~cMfdv]bNo?@+j3SPA)0I@f#Vj8(');
define('LOGGED_IN_KEY',    'g.|.Gi ZT#WB#>y9(p8[O6?#u]A/QLacnHelv*<t2fZ`]|qi+wv<v!j0,hbHsX~.');
define('NONCE_KEY',        'e~)JX6H]1Kp?)[]&t:+TF.=Ja`|V|88B59oSjk?<-+aKj46_198gmvS[T+7>UI~b');
define('AUTH_SALT',        '&6<^N7Zh7!x{>u>%bb+:#0gJT|^BkqM/|ReQX8^*N25tB0e#d3fu}4l_$D+wa`UT');
define('SECURE_AUTH_SALT', '8r.-_9m9?6-+!.wB%8Q)b|<y3DjLzTdMSo{Q{j&3ooW@}nMyDlUJ@K4nlm^H;1=-');
define('LOGGED_IN_SALT',   '%-fBtA,DZ&]@{VqUbsgh?LG*CS#,/CuWS@4x-H[4+LH<B%/--aoK;ThBW&Rn>wTQ');
define('NONCE_SALT',       ' U5NQ/b0u%N~?sxdgfh! nK+b5>KGwaG/*YHXG=[ph}c!HPO{{7iRbP+QstTD ys');

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
