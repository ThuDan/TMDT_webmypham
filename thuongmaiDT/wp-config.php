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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kimtan2000' );

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
define( 'AUTH_KEY',         '-CxLLaQcIV+/gy{Z#LK|tJ6dw`%EOtVP$](9X%b+-]Z,>Ka# u#Rso,r(L^[z4<W' );
define( 'SECURE_AUTH_KEY',  ')*K>l[/$M!Y+,D*b-7wD u[]}<]X-[;{XQ3BV_A%U`d<;ZDu*.MvtFDqWuD8L<y]' );
define( 'LOGGED_IN_KEY',    'o7{K?_0pAU 6/I[Lyf=sPqnoWHl7bj6`_Ai[sh@F(Y?!H>JVYR.,yPpQa5_&@$v~' );
define( 'NONCE_KEY',        'QhdE?U-s{tz_$kPRy@9v)q% tS3sG^/,yXRQ*DQ+Z]s,ahH1@*M0=4d.y0_k;)}3' );
define( 'AUTH_SALT',        'eUeYV5} t5Umw#Or@Ql6^=}zZ_zh@TGbuDLaQ_O18`z.k.&Rc$ qo]s,x&dkQ=,y' );
define( 'SECURE_AUTH_SALT', '814JWqcCfv^.P@.~T#DxXp_eg+^fbpm?cRX%Jh7/ssnxPLNG|2sLh<:uY9*2AC(J' );
define( 'LOGGED_IN_SALT',   'Wq?j);+C.,69VJcP^jS0M86hw9AT.nyT2=`_o;*vlw:)}Y1.v`3@JVld_1XD]0V%' );
define( 'NONCE_SALT',       '4Y!u4+r#rvw|wF]3JDJbHZ]53eudv}z9@0Z !n0sPQkz;u.8><~SP@;01;4b9ue;' );

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
