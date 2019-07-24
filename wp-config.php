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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123aa' );

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
define( 'AUTH_KEY',         'km^9Aw(5mZXiiMT!WUa^OT3~?-?q&-2/|E]p :n2OlOjz{ArDPI.@^ 4psqMEUwr' );
define( 'SECURE_AUTH_KEY',  'TX{7]N9cvv,=8I7$|OuRS#tj@RjBYPrAcG>7Ha*).Mb0&#zL(KF!5c?Sb}4;zom4' );
define( 'LOGGED_IN_KEY',    'fMJrww(Q!gL~|*.7V QNQ0gHWP;R?y=#{!4#4*exgp%N/q1!W58#2<EB7r,@@;&V' );
define( 'NONCE_KEY',        ',2a`Y:[Fm&J-(Yd~:pb%C{>?r{{)61.v6}V^Lf$7%o:|2A4x5fvq$bQO+E.^;*#W' );
define( 'AUTH_SALT',        'det4,IlAhhqix:d|7E+t5 aJ G:pGZbkQC{sd^Ja4;SmQ@mO{t7fvTo=A`^JS ,1' );
define( 'SECURE_AUTH_SALT', 'X:Tx@W}}W^HL_%xj1CK-jp0L/5 Jo}tGg01h1-Qjo^)PwTCx@w8#x,xHoRe_TTfP' );
define( 'LOGGED_IN_SALT',   'B{]G>3GqtPuxk;h?.HB5m6=3oBky=B)a8VNItepDc)K uh[81sL|70 `?_?[m(N/' );
define( 'NONCE_SALT',       '927@Uv#y?~],JD/62Av.,q,_gj-~-(|BD1 9#pLqE.9cixPZbi9>%)?hO4Ln.2i&' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
