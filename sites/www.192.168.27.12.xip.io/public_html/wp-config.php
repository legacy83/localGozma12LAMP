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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp@secret' );

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
define('AUTH_KEY',         ':%9~I *Kt;3.9o>z-v}8yq[Y#Ga.E5or~Hb1)J|{4)jYZKSb`a321a||gfs6h_Gg');
define('SECURE_AUTH_KEY',  'Su27F;_;LXf;9nwjYT.WK+b)v8UB&-21V7N#D{T%n13v2a|7aIFoUmVKXk!A-4,,');
define('LOGGED_IN_KEY',    ']g&0ZGUe@|v)* 6Mi|(@#![pR=qV6.4 o-,>0I5`^[yiiNJv2Is0hNZ$)^zcZ-Bm');
define('NONCE_KEY',        'UtehF1lg|0l}AF,f[rz~wHYd4>CA&7rHkHUu5Nu++k:J|JV+ShQxH-&/Cq..%1_]');
define('AUTH_SALT',        'R(KFbI s~&jWy$=(lqhAZ$k+}w&$Ov|bbve!uw?Iu350eP<NPZ|t-=^Q)ivmh_F{');
define('SECURE_AUTH_SALT', '56+7Y]}WFGu_H^&tpU@dlr1+;~,?@2a<JD- /F+p>}z2s!)T}IMXC[YFU:w0GAoE');
define('LOGGED_IN_SALT',   'gA(q,;vXI3|c7Znn;Cv9&=$WA)T6IS+@,OnmG[w+o^2lKQj%d<fFym[sQjBUv*O&');
define('NONCE_SALT',       '`;1t7P/#6GZ0KI+2{i&7mV|qlY-PkNL69?~rRL1yS+S.4Y4eS_v]nhERwsfulhS1');

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
define( 'WP_DEBUG', FALSE );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined( 'ABSPATH' ) )
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );