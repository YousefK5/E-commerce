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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'l:sz11L0g*F^oNVQNS#JjEWD_@| G&ri,Ez?u,-0MF$jBLQ`C>:UGi_%@OEH<.U)' );
define( 'SECURE_AUTH_KEY',  'oY!t@Q6@*e?fvLAx66MBGORR**p55}7:k.Ng%dD>J!/Yab7Y]l.jcYY}J.=NDAtj' );
define( 'LOGGED_IN_KEY',    'fk)k7RB9Jb},Z+#~Y9,E9O32v7<th_$G,%]Xu1VUSu4^H8/7U-4Wh<B+ukm:j%dC' );
define( 'NONCE_KEY',        '_P<]POhaJ*LK(wKaJ+=UiDf#YJ%=`;j(r|hbqDVd_G4@PMP6=3BT@8<lkl:Pp+i#' );
define( 'AUTH_SALT',        'G/0BQ2dURE2+5zaOx% l?;kG*K},Q1UZj5y1cCyJXlD{tMYLsK.5T0U2n%c0MwCh' );
define( 'SECURE_AUTH_SALT', 'z7LJZeXDryn/]r)_{ Ei0wPC0LX0.JA7/lLK-[^Oc@deoqA!aL]hC-vord*]Wd&`' );
define( 'LOGGED_IN_SALT',   'g:fg)W+xF{,-Si0(2t}U;zNE}i($FO@2c86VF/}J ,kO#c0E]#&>3f&}2e1S(Rfn' );
define( 'NONCE_SALT',       'p~y{D,kGGe:e>HPm<~ia$D38|[_cYQbA8N?FN)#Q@n@@y2m~Mf7|I$;lWgc=`Nkw' );

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
