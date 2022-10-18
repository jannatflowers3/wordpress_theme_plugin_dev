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
define( 'DB_NAME', 'zboomb_newstika' );

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
define( 'AUTH_KEY',         ' X8QI$KU8znp$w5/Yy,S;!Ii`xMQWSV~_3bYrUc(f/(F(9DA[c;XZ~h$m+NM,#`=' );
define( 'SECURE_AUTH_KEY',  '>o=u ~|GzO/ lRdm9uutO_?ZBe?bSNB[UJJ4>l!STUx.fx66`74Fc3R{]Vi;Fk/=' );
define( 'LOGGED_IN_KEY',    'TJO8xy/<.@v,`5s~cKYt}oc,wQ>~q8[(V<s50EIV_+#[}B*uaDP?jhg&=~Q{gd2*' );
define( 'NONCE_KEY',        'p9H$4VMZFp!yI.Fi#jc]ORw,]piEwlW[dJ+5[Gkj~d&fWt2}2#iYC.GU?~Y_3/oq' );
define( 'AUTH_SALT',        '`8Qa9$+hG1C:&}OYgRc~^*zSIi5=zTmV@HubKt*]f$xpK5c@#I{ O.> =5rCHsik' );
define( 'SECURE_AUTH_SALT', '1j^|vq$o>[#,/04mlvkaYhnR)zD#d8_E;Z7DOW`w9Yvflo5^uMht,o^V_)sNw?oB' );
define( 'LOGGED_IN_SALT',   'ZQ[{9|mOD2/{QBuyON~@_jT[4eUx`D|,}N_V+%i7KU$8gPH07}FeTE5U~+5r>b$|' );
define( 'NONCE_SALT',       'bR@b@[@u]o,DpGlN{Qw2QAJ}d;}A]F`}{(>`fOBSz#2ESRTlkTZHP6U9vy*8Jf,H' );

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
