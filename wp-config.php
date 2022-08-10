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
define( 'DB_NAME', 'wordpress17' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'On0jxM0*(#_CwESHa{G4ilc_5lE%wbPba6%iM=y$8Z4YK1CB/#DX]IRh~MSn(_^*' );
define( 'SECURE_AUTH_KEY',  ']fl(t !Rido[_CLXJ~(;d`Fema_*cP=XmmjC*1l626A7+R-l5Er](Fjl`>!hH P%' );
define( 'LOGGED_IN_KEY',    'YULpSR5lOim_5h_2fz{F 2+Kz*8bTFA|%A 8a_S@6+qkGr/T-H8-><^%v $fg:bY' );
define( 'NONCE_KEY',        'Jd}yXQn7d)npH%t0F[<eZxqZ,2n!2FE@?66GTZC[iH(WPz6G}Y<}5K4W*99;9y+w' );
define( 'AUTH_SALT',        'Nia YOSUp/&W>i3JAS}pKZXLMpAwfcqkAtPLi%S#gc3[.t4dWN~zv5#Kt_EcZx=W' );
define( 'SECURE_AUTH_SALT', '9Jmf5up?hrGSqz|6h~%r2+bg%6J*}T)-x* |(7W,=bif@qqu`GDvM!C%&ZQIR9+`' );
define( 'LOGGED_IN_SALT',   'P~M%eH#$,gQBOp)Ec9y&vK0.C#Z`[]sZC2pl7B#E#iyEk-~N[%3V0(}$@Xc~+^ed' );
define( 'NONCE_SALT',       '8HOjM&$]IFu0;iXP~?$be=t2sKeiq_<Ug#j|EV~Hc8W=9L30H2wF+zoP~ls_fU&}' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
