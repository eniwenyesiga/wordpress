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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123Enter!' );

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
define( 'AUTH_KEY',         'fv{,&5WR!>`y,1>d@u.rNWw6(3Jw&xD?x-?;OC6O:Wi2~95uTLjA9Ay`.$f_!o99' );
define( 'SECURE_AUTH_KEY',  'W[v5Y96MMiSvY>Yul4E{+Ef^kOn^AbbGTW9j=!2L[CxMf3Tkuhs8KVH?*nuceE&<' );
define( 'LOGGED_IN_KEY',    '5qxo.X4[bbz03h_Mh&e{=^{KUzT}+7# ErQpV%nb5,BHgIr]uT99Yg!nSJS|Odjt' );
define( 'NONCE_KEY',        '[:{ yq7k&5m:1^$*~.`?L8L/j=.Sn. W/>qpVm&t1 IRBju%:07[2ovR^]bHwx{A' );
define( 'AUTH_SALT',        '6RNW8GZV4oA+QP)Dkl!Crwf*aM`h`+IOlif!nbK|*b2r?d/etOQ}f6I6M2:#%caV' );
define( 'SECURE_AUTH_SALT', 'Ta>Wzzt/oG_k`,8?;<de=`w6F@=PshJE8.? ?ETk0*,*Crqd63/=1hmr%Ms!d$+L' );
define( 'LOGGED_IN_SALT',   '2$,8|YSf0:Ff6#Npdumrhme[qI^Ahj,A9$wqWE,Obd&igTGMAu.(xolqN6R 3^W0' );
define( 'NONCE_SALT',       'GOZ2(u!VzhQQPc-p[Exg{ZMy9 C^(dU(<B^{Q{,W>opq<j`[4D|1Agg5l3[7]E?}' );

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
