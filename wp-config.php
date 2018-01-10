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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'JX651=}`$_ UCjN#1ZS?kq3C}|*h.jQ8,XDna!Oj7O5C% q6:ja>E`#7w!<)K)F#');
define('SECURE_AUTH_KEY',  '|T8[j-5^)m=_pO?x)fHvh2(@2RxMEVO+5;d8VMvo~N/-*l$irS<k6*HcLE*^t  I');
define('LOGGED_IN_KEY',    ';ND~1(?v|`&R&>u_+a1tot|%{/TKTqe`@Lw2AV-4V3St>&V)mI`/0@iBE{lC?&bw');
define('NONCE_KEY',        'I2p>Dn1O(>&9_EV-KPDO uwbTb]YR^&<}RYf;Bwr1s=#k2b<`^%~1!f=loE@c-P)');
define('AUTH_SALT',        '?IpyVX6Gsx}SFxLW}MvZ0JDD<65{dx_7%>H^yjq#=};UA4O;o0NrvYTtopr9pod2');
define('SECURE_AUTH_SALT', 'gBlJ2cT:00t6HC>ZWg%/Tq4xa%VI5U:A>ZSntZ^Ax?w~jyJr}*tsJZl]_E<&=BSR');
define('LOGGED_IN_SALT',   '!hIi;Xiau$V^<o&ex^w5/ktHJW1b3f3hQs(ED6a=V-*^KZ|WL~35qRlq`t,8N1l+');
define('NONCE_SALT',       '$4Z>2Bhmc/U{6)IOg^ 8A,v8JL)p|_7eW=i[M.L8:HcU-QG7yD4ck/[y[UaEcu9@');

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
