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
define( 'DB_NAME', 'mypham' );

/** MySQL database username */
define( 'DB_USER', 'mypham' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Dan123456' );

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
define( 'AUTH_KEY',         'D|%Eh/q=hq.da.G chn>sTd@dxTu~a~-ucE3%PK=XqZiTf0?SEQ;F$N[<Czx-#G5' );
define( 'SECURE_AUTH_KEY',  '2#oi$^APs|{pd-aDKd_,q72DiMmpC]~I8l@<,`{;1Tu#QXO`64XgKvf&K6ooeyiD' );
define( 'LOGGED_IN_KEY',    'TW*wPAj;F^4%6+LW<k.*Kme5>~4Ws9:I?YE3S2fg6MOn7<-FUTfx<@|rlg3&e^t/' );
define( 'NONCE_KEY',        'W0hW[<ed@G]tqQ{YYPs-4t9D`38m&fVjvK7cI^VzJL2MR+s>CzPP1>%5j1*7wcky' );
define( 'AUTH_SALT',        ']4{z:))u@JfYltvHF|>j/rJh4*CyS^8m0 :x$>X|~Z&G^Okp:/scY,%?D-4W#3^I' );
define( 'SECURE_AUTH_SALT', 'lTw%&i>FoZXgO=fG74()AsQ|J8[6?aM-m]VIASYH%i-!;. 0XJSY>Vn,kT Apqj/' );
define( 'LOGGED_IN_SALT',   'Crsx!%A~d{`w5f2sj]ALB^ZnrF,>QQxsl0O;Y%i If?7N{2n<SD53Qt0)W(yc).m' );
define( 'NONCE_SALT',       'ys*>{A(PlH*sI0?%cwfph@x~T@{~mA31fN]Lc= n*Xx.lrA)a4z>dT{i9W7=DWyM' );

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


define( 'JETPACK_DEV_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
