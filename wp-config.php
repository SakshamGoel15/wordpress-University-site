
<?php



/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Wordpress_clone' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!o-tjgL#kp43SJdMRv}Ms#_N7KF.G~Spc WWrru%:}rOHPX9i~6g6<k^bfXNUtm)' );
define( 'SECURE_AUTH_KEY',  'n$iwk<Y9%v*2hgeIK=]I::qd9gvpD}u7WR:1A*)NHWt[Er#eV%Bv&D;>OHHDX||e' );
define( 'LOGGED_IN_KEY',    'e/MbiI=:8Ed2d7^]4SIFrH:eh=GWx#tShC^O{J9<#Su|qfRKN+NL&)gL7mCcxT;8' );
define( 'NONCE_KEY',        'EoKP5K=cFuBi@vpmlZq%)yay|`:A;;I.[S#rp^n9>W4OREA&##WIR57R0bYG+gyr' );
define( 'AUTH_SALT',        'G7jJ+(8!=@D0RbiV1A4bk+O2jLO4b<tO&8Q/Js&[b!wH-)zH`GbzJ+_j h56M<W~' );
define( 'SECURE_AUTH_SALT', '-AN3GT%WScr}.z1^mM5nnnKH#HFntmm.Nx/YfW<$4B8o@X0l^WUUAOya{wncm9*!' );
define( 'LOGGED_IN_SALT',   '+ah;RS!aW-I%T8s5nnPG9!i]-CS3$xff,f:MR$Q9<@;1[sD01`R4<a&MVd`A$I]-' );
define( 'NONCE_SALT',       'ymCTcd#3sQn5&*v6cD[Z,jPZDQn&}[47i:jR2kJk,vuzh=3|@FMj.6vjFkAt+%TR' );




/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
