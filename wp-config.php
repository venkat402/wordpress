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
define( 'AUTH_KEY',         '7t_ck5GvnrS R+fO}47u2B20)vy#UE/!Z0-8Emgc`a@_).blbMe)*@?&v=OklsEf' );
define( 'SECURE_AUTH_KEY',  's}JD-0RT?*YBGWV7?>1Bu~N&>b4;+fz!jtBAa80#^z!1]gsz~I[w9S}v?23uk288' );
define( 'LOGGED_IN_KEY',    'Z<FB>U=Qw)J @E=v3%PnC-}T,1=z5q!kjOco3xU5#,=1zB+zODAX7H5T8Z/ O,}P' );
define( 'NONCE_KEY',        'BB;N3So VTk0]oL]]o)`y_dhzmXw{]craNiS42S9rC+7)wNC?g}cmQ;bAp=|n%Cx' );
define( 'AUTH_SALT',        '>~^L7qVFky=2p*~mRkEI2memu2r2/{s}stv&=5[_sA4zvLg9_hF>WUAkwOy,M3&q' );
define( 'SECURE_AUTH_SALT', ':F*wev^;=b>!K@IuP){nfRa A|7r*~jOP39CUuWW Klg~;tkq<U+Mp8RC$/VUqS=' );
define( 'LOGGED_IN_SALT',   '8.-k.}DZuGimH^EBsgY>~O)mFa<lHS]@?*!71HN>Gmr5Y3:|rIvhg=*K1|iQGPXH' );
define( 'NONCE_SALT',       '7vD(m~*h+U;j~.JUEXBxG?b:`KGb-yb;$McNR`sWnwf@g!HHZzR:q0Os^?Gb}[78' );

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
