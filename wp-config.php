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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Kickmystartup' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4dj~N>oqWmR$Ab2Y0}rfVX.`LUS0=)Fgz9fwg4e}(0#PhcH,sS1skde<rGySp-x7' );
define( 'SECURE_AUTH_KEY',  '3&RI7WjjQvBIT>]x3d/@8`!fb Z/!TB?Z0fzLwZusHwh7Oe@Sb4]9;zW[4Tui88S' );
define( 'LOGGED_IN_KEY',    'PhTwL*N$f<kqYgm|:Q1KK7g>fL u3(@vUY1R.l(RkIWnsF^8lcj5bBW4.O%b2mp?' );
define( 'NONCE_KEY',        'igK;C.1GzPtN8(uPI7Yg#_^)CxcfalxWKZVP_6r?$`G&O+p0YiR 6np]g7awRjU6' );
define( 'AUTH_SALT',        '}6vY)kDr<*<0t{|lK=`VuGUJ,j/:E,;utA_;:dwJ2_Pq&Fa^UuKi>mUECU-|/A]u' );
define( 'SECURE_AUTH_SALT', '+8/Y=g)=78@&=;$xA&%yvE?s}JE@|@(R<4t1Qu~~iV@LqgG)uS9Mf _^y9>CRQd4' );
define( 'LOGGED_IN_SALT',   'I7200TWQIjK^|Nyk&4OMKu,-/k*Q>+.q@GU!Z8RTV!PiWVyH14PxT9cY]>P0)/c-' );
define( 'NONCE_SALT',       '7~5B%ekE`A,04?]!RB(PWwE}]J#U__]<8.Ta%tS!WwQYVWhRtlCK$kd1 cdHV#C$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
