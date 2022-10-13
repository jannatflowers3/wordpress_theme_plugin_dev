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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epora' );

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
define( 'AUTH_KEY',         'AQUHE/3JLWD||m~4zX0epIXdcNdBOJ|}D#&`1s3N?n`RG/VgJ,MVj64@leS5udnq' );
define( 'SECURE_AUTH_KEY',  '_fWaI+T@RIvb`t|3 OvnGI6/&)1/(@dIC#Zh:y/.P*uifTmE~HgEn9+{-3n}g~oX' );
define( 'LOGGED_IN_KEY',    '5(iH7uS[pwYB@krX=0vL^a|#)S*<+UQ@PjN)K6Vg50Y_WL)Q3>!^GhuSRsiz{4Y?' );
define( 'NONCE_KEY',        '?C4`PQ=]j#V+ Ny.2$r::,@.)0_+JMOE?V:eHv;KQsM:cm%WLfjPA5*>.Wb&|z_o' );
define( 'AUTH_SALT',        'i/xeA|1f<IuE|X7@++OC5M({%>4>-WnOaR!1q~[:e#.2tmlp$p[EE2~2wVMu;9dW' );
define( 'SECURE_AUTH_SALT', 'Ro[U8JZjmG.TI#nBd)Gt!Z4l~Y17x0$ENqrjl*J;wX-q3*yW;/(!wE>{q^$F@4M*' );
define( 'LOGGED_IN_SALT',   ' (zapOT@%!Pkg9rmq7QW5^{B~0>VksZ5`u|=p]IS,`#m4pY)347A0dqtA:cdU3^F' );
define( 'NONCE_SALT',       'otMMmsJ1jnnw@ooM@S|_*o*Ts|U)#KkbLROgJH^vNI]#t2p4<b*:/mB*dzN,U<|1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_epora';

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
