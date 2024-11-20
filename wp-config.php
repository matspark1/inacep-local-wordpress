<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_testing' );

/** Database username */
define( 'DB_USER', 'phpuser' );

/** Database password */
define( 'DB_PASSWORD', 'phpuser' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'zN{|N*]<MB8zbWhx? l,fSHl!?j#azUHLaM=+*4y]s;*+EG?z&g/:jZ*|sb8(]HB' );
define( 'SECURE_AUTH_KEY',  ')06yXI2eO19te1e)tYaU,lXUY*XUEx]?|tKpQQ@l5`&iJkykT6T<A>:QL89Bds-P' );
define( 'LOGGED_IN_KEY',    'n[m69eI^Q+C3jGu:n+W=HCK!Gt0=Y62#{Jz5=kWB*z+M0Mv_` yvjnR)oh*jS&Yk' );
define( 'NONCE_KEY',        'bRP.ZS!+w~A>Jc;wqD6pU]l=g=E4%OF!r1TOH@AmphtnGM!~9m&UZFmqQGmRm`hp' );
define( 'AUTH_SALT',        '7>^CPH0|!?,_h!f/2o_d=({I<IwjjZ!ilK+Hto4e:5pA]0W4]t$&zF)0?l=x{-(s' );
define( 'SECURE_AUTH_SALT', 'wS^*(5+(=8a8dlN,FJTBY&X##vCT<KLahuY?1#iHg)p/sC[r<%;#X@F+w&WosfX4' );
define( 'LOGGED_IN_SALT',   'a>kpZ>wEh).<}M&O01SbYbxPi0%(@;o{i<?V)xHfi44&>o74{{xSybxwm0GXD[e/' );
define( 'NONCE_SALT',       'B)HM w!]{Y*ismK#R[[tM.7A~fj/CY8Frly$| =b|},,~`GHiZZPyr~jaF~wG0Ev' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
