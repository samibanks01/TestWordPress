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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'gWBiJ9ryQt3fTse<a}89A%HTc17jZ?D_t,{oQ+wekMr .5c#{NLoS_xsY(*ymeX%' );
define( 'SECURE_AUTH_KEY',  '9oTwp#+QciQfzv_<S*5(LyUZO^|U[3cBM9w5AE,D0)4,rver0{Wx{20FJYE(ifTE' );
define( 'LOGGED_IN_KEY',    '[/GY=aRX#}59{&(p&{8(Nj0:!:yo1@`R`lWOqT/MEg>=wp<v:~7Lga3QEuJJN>}/' );
define( 'NONCE_KEY',        'lJ^wl(U^3UWpJ?Etcm4G|^3*1ca(4O:-<ER`g6jd>AUw}#T)CB)^h7Ur!yUZd5NW' );
define( 'AUTH_SALT',        'fQV,Ur&/Re%z&cg!@k#{D*JzXll:v5e19QqVNO>ue)r5cR{Q-~h~>aIj#N-/7G2`' );
define( 'SECURE_AUTH_SALT', '/k_]mfV[SyUIPKZDV^hPi*)*/CpOSKAVT`iS~!G_upTPeP21V$Sh7mo;hO}jg~}/' );
define( 'LOGGED_IN_SALT',   'pE;NK?:FbcfOLO9X@/oYa>-1<&qL|.wgoD$-yTcE8bax}hN*MMZEf#eA]RuMo&Pe' );
define( 'NONCE_SALT',       'b(7y?Nm!m(a}U,/x?(39z)>2gGI?lcpa:mxg(ago;JA?dM{f Vddf@Enot2,p+cn' );

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
