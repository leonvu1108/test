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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'jnO!Oy1DU1L].MO1ULr DN.ZJ>FWl7C=d0dv(Svc8Q@+,XbrZ%sB$Q67+fF#cmGG');
define('SECURE_AUTH_KEY',  'CsLw5(|G)RAmZX5Q8L5m(ArUdueidpPFKO4 cRX_c.Y8<p|OEM[b_-g9;WvzjC*3');
define('LOGGED_IN_KEY',    'un81{|6<f*/XB^F@*L/!CrJ#n>fV1qk1om|r<NV-xd,~P{{$Z0m[O~vr~D6WKYt,');
define('NONCE_KEY',        'Nay0 <Raf|u_jM$w1rjLAxwzk3[oMtX^u)iLdT4 d2}zrfYLOxTfvh7JDcPFjY.B');
define('AUTH_SALT',        '((2dQLli9%X-{8 weCA+n8T^yq~O%LRIwt*:9CgP1`TnR<OZR*[XrS}Ip]B!p%?Y');
define('SECURE_AUTH_SALT', '2KS,<`zIpmz{} R0lgv_oh7v}ifrH)eu+E-AxCV)7{oI4uG[l0T8^^Ri,4]!Hi#J');
define('LOGGED_IN_SALT',   '8qsk{tu0<HY*!JBo0G}4U1jKt bT^a1ls/i|OR@~k)l*L~G6!*s8C]%)c]!jdq&j');
define('NONCE_SALT',       ')j+7Ax4o8SDOBW(iwnKm8D0m38oxKX2<g<#2rQ:&f2J1=I-|v0yzk^T9lMkZX[Q&');

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
