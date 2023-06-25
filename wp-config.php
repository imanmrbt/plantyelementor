<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '5+x53B|Ts5c|Uq#UXb/u%:x,**CbU;cV-h/L:M!l:6/I3D?5oUkX:cZj5]-:y%36' );
define( 'SECURE_AUTH_KEY',  'aD;73 $x!4a(d1xVdfuZgI`QTr^3,2s0>[J~q 6$9I#nx?*GG2`?/cd!;_vP5N2,' );
define( 'LOGGED_IN_KEY',    'nU}*YkgjK!4qi.u:]:/|,<s=-x|.dS(U:ok~faTR9xm3a~4=;BlBut{.pzy&KxK5' );
define( 'NONCE_KEY',        '(K(hd-@EF$g)k8pm-)-H_2}+m%*$O@sf1;c,<,YDorZ}qKU@#n#f}7hOTr@Zgu7,' );
define( 'AUTH_SALT',        'Tv`) 3Se*RG_SyPscW&A26JGs8*vLf7tn8_ |;c^Aq5X~y(v]>>N+H|ar-2|$S_+' );
define( 'SECURE_AUTH_SALT', 'qwX5]9q1PZv0bTzaWh)Vy9:^IN.f^Vt=nz<,l2DHM.xIf[)2(2qeK.IJxP=3J;6N' );
define( 'LOGGED_IN_SALT',   '9_V}Hx(G8{$ P{4JPDAUKE//Jj0lC _3q@*t[WmKZJ~#HcN4&Ecbr;F6xq<5L:$x' );
define( 'NONCE_SALT',       'so2%P$4SEqz* g(2FRi&!+Q; cxW>Q~lJZpb|x)B87~~xWF!Byb!i|&O`$<6>{3X' );

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
