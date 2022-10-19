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
define( 'DB_NAME', 'ecommerce_plugin' );

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
define( 'AUTH_KEY',         '$$eBO#SoKEA1le&K2THEY/7mjpp1=1(=5exv*!tOf]Qi|7H@](Ks=;^P~Tk5,E.7' );
define( 'SECURE_AUTH_KEY',  '+4.n,&)T7o2oysgq-{)3VD)P$A@#r2.CB0&_cEJe&T-$7HCXH jI*YkSVx7I]8cl' );
define( 'LOGGED_IN_KEY',    '9?>;94`R}un{)v3*s/z~,g xxC]h9T2m@R9zA }@SS!3ymPx]M0;Pq`?PU=b?L%#' );
define( 'NONCE_KEY',        'NRd>9(Ko9&@l,YC_801_?ftwXAK3nyZ=8=893~W<!Qc?8Z3j90UsQ0?`xY4S7Jd$' );
define( 'AUTH_SALT',        '{d2s]dpPAr49Sgx%N`>A|@PyU5(j$ms.jS4M[}.OHd<V?x)N(_-PsR`@d<LDWTcf' );
define( 'SECURE_AUTH_SALT', '13+~(HY/#~?P[%24s)Lbl32(h>(fJ5DpR|2*$v*B=;=kGGh<wWqv+k^mP+XGI|%$' );
define( 'LOGGED_IN_SALT',   'D&_M+<Bam,``:.`S#Gn|4QT!Aya3XeAw`aM2pIU%}.o3X.789}/!?eX*GV`?EwdX' );
define( 'NONCE_SALT',       'F|4%&3*1nXX`y?sNt4?$<Mz#P *E#,|^=GH0Gaio~8hJx 2 |(8Rz #p79],yHb.' );

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
