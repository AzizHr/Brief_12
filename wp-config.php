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
define( 'DB_NAME', 'brief_12' );

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
define( 'AUTH_KEY',         'H`T}o1Yh}_/)v5-rU.8lA,&7Hcq[tTu91+KMoTHZ=Yxg?IJH~E}>h)NOK2W.,>3T' );
define( 'SECURE_AUTH_KEY',  '/S/LZIN,=&S>?amxF?G,38F)oe%SD,%ClwtY=eBxlm%ft@,KZDkV[/`z%cel5!k/' );
define( 'LOGGED_IN_KEY',    'k:Vgqq)9~sr]=6~W#BE=?fQv<fz/)_gr&F$5@)J=XsGKp>D$%>1a33PF#V08Rmr.' );
define( 'NONCE_KEY',        '3G62[[LUZ6xaCl=--n}s*-wuX`w!6:F{_L*Y5]LW&55Y$|!xF]YPE4XRcDdE]*1)' );
define( 'AUTH_SALT',        'fSf)=wB]^vkdbUgALCTV]-sUUH>x/rA%K7H*G~(Ost5~h6XMl1E5INNXh4QhN}1%' );
define( 'SECURE_AUTH_SALT', 'P>g^p6kQ T%Ls4~%cWwjP.{ff1hlq~`0I^L7W)jm+^/$%9]|`^!b}.=Yd6O3)C~d' );
define( 'LOGGED_IN_SALT',   '^PBBAuGhU|U^#Led,51;8:e}]2FB$h]7:TNV$%{@m0,[+IoT}l`./L-C&yn;}a<B' );
define( 'NONCE_SALT',       'lwa>mj}_>F2 <W89_T%]eOB XBJ3?vBGbreC01H~r1~me4}UkI2OQhkMs#2y/_v#' );

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
