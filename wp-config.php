<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ananas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f@9q/lN~I9uDz%nh<^av`g[HH(a^vhy)2S~f-a5+kL7y%>9[wY 1YA3l{5A9r;:+' );
define( 'SECURE_AUTH_KEY',  '+d)*+9v=TrH2YJ^|I?{bnE2boXlCpTy%(3<X-^y/~#sg0:g:K/4k]?G,yX@D88#@' );
define( 'LOGGED_IN_KEY',    'lh!s]jH>*!krgpO3:mx*u;z/T=hV!QEB]M&wduxBn=#69`|c&DwSB2ufQ!La6ZQ_' );
define( 'NONCE_KEY',        'PD&|CXokNf+Cc7XUY*Qc>0M^.=4*7I6rvJB;3T+:/uvX%vrm4zn-)jAgfJNlgwDw' );
define( 'AUTH_SALT',        'P)Otfpm($e$IRKb5]H^MBeJ[AQchuGw-#nTliWCanvc8-Mjv[(j:V<^u*SJ9[wRo' );
define( 'SECURE_AUTH_SALT', '>RC]aJ3d-)Kv uF>4*IH?x:T>Nwb@i{@#O]KmSp xEp!035}.a2}=OH0qT1_^SX*' );
define( 'LOGGED_IN_SALT',   'vLkCc*N5qp3I3/AAFErY{&2Iv(`!@=A!z.o>aP>-jCk2Kyc4E:xV:uGj8WTPD39>' );
define( 'NONCE_SALT',       'Dt$%9wd|G2CuQs+{fJ3w5|qdWG@<}#Z#L:TkLC<f6{X#yu/%zBihZOTy3n UwQ)L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
