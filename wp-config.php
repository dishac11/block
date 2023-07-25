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
define( 'DB_NAME', 'block' );

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
define( 'AUTH_KEY',         'Mk=!FZ+XommA$i|[da6rI`*!Lj,8^VKN2^#^F2%mg0|Gf=.;-~8_.Ue?~=53plr-' );
define( 'SECURE_AUTH_KEY',  'h*Uo6(6;vsmSx?wu/5<K)z<~9a =r0mI4e&iHdX<fT8sWjz>I2Q8#v1 .Dv-C-S<' );
define( 'LOGGED_IN_KEY',    '`b+NEr~H>%dkh^_wA@J/tc?m8A)V3=dwY&hT)2t*:5y5q<~O,%0}(>[^j%>mK1nj' );
define( 'NONCE_KEY',        'xSXFNwF+3o*=Agy~7`m&Rh7(YA1|Z-|&AeWiY[3OKa]hIe-d<Ez;tj^4]S# > KU' );
define( 'AUTH_SALT',        'd)*6!QlIWmjrcy|@gj`Irm=b*)D*5r>E2=AtTrl~x`jL-r>~38Xe(XiQceN2_Q,~' );
define( 'SECURE_AUTH_SALT', 'Q[2LTzxL+kj(4@l:pjHD`X%^Hd>h;a8h1VH-15{qt@BS*zp8/6T^[A#)vf,3C`y^' );
define( 'LOGGED_IN_SALT',   'F~<(u{svW6,|#xw2u#KKUb46AvxrXdI;: NO]$A9KI@a!a].IJaQ31HSK_4m`hqx' );
define( 'NONCE_SALT',       '+U=_Jt$,c~U!MKL7KJ,(QGnkK^-A0_n`bm`HZm44;oqHh05SVf=>UN(Q?vqO&4L:' );

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
