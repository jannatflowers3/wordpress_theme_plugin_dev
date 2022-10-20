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
define( 'DB_NAME', 'dukanmarket' );

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
define( 'AUTH_KEY',         'p7SdWJnMP+VXv=]=N37_7o^&B.WB]7{zS$W1sLPRU2]$0g@#/YC[=9haQ(x, w+%' );
define( 'SECURE_AUTH_KEY',  'sTuXl]PlM?C[i$iT^ $d#3#Xddcic_3Z]S/}v7ZfP9qTCH*tY&@jeO:v1HA_oSe=' );
define( 'LOGGED_IN_KEY',    '13[2|0I5i]?H:UgLpy!{m9}/o`ksN3/+Lw%NWjkQ <Z{+6qaelQ7O33YG)`BLaW8' );
define( 'NONCE_KEY',        '31]K~0e L4I|_JkeS(Y^sPXHd*[<WMX&JeB_1e4UsCz,e=e`vpo>E>.D!Idr)M}K' );
define( 'AUTH_SALT',        'wh~d8B-wQ`/!S $lKStsJgdEzT5?G@_D:l`e}bA`Oa=n_?-T<;{trJtJ3K#<[-=k' );
define( 'SECURE_AUTH_SALT', 'gjAN;y7e[X~T|iikeW*WK`g~UG(Wbi,*{um/c0]UQ/DraVp#CC>rw@l1|MhSeT)=' );
define( 'LOGGED_IN_SALT',   ' :Y<[VD4SorEc+>J5*<{Q=+;C#:S]:C1S~3*c[{]{i*EA0dW&rbg(c+&2u&u?(WO' );
define( 'NONCE_SALT',       'eJ{u X?BbO6p<7`]bXbX|*!M@):LQR9WNx1-jR ~d7J?.SJ0D*W8Wg-Zl$uArs{N' );

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
