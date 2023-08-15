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
define( 'DB_NAME', 'wordpress_database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', '35.228.151.183' );

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
define( 'AUTH_KEY',         'nK1kani1i[@t6-()SsN#G#QQ^v:7|85wtn_*$jK{X}}_@e]D&:2aRfru0faJj7!V' );
define( 'SECURE_AUTH_KEY',  '^X#U}hveP:SD8d,QEy$12H?K2}WkD=dpIQ3vA>+-alqWz>zED!Iz@3S>|x4UD.`t' );
define( 'LOGGED_IN_KEY',    'D4qhxs2[r~s+M7-ORR>[JxzvqDuZD8G3);[J(&Z_0PHK=x@)EH6^L8FTQK2t!t?,' );
define( 'NONCE_KEY',        '|2yCD74R|q}sS0sLzsS5F/dl| Lw1RI-fRrECLd#*3WDAEo&jeod}?%Ti*<@NHGM' );
define( 'AUTH_SALT',        '3`heFsx1c&Twx=n?B{NP.AB,y2ez?1NS5Dm>C*f[11Z$;?OUsM1{EjaHU}J)ar{P' );
define( 'SECURE_AUTH_SALT', 'MU1HXJRj$. Z`>av:oc}.;ObITb!e<~p3G9g8%5)BKeSDn!}uc/RQnF76_u&W)vQ' );
define( 'LOGGED_IN_SALT',   'QMadz3p%STkMS6]WCQYaT0@]61@;8R1)lmviw7?R.b5RO69[T`LQQdLRvI27UsX0' );
define( 'NONCE_SALT',       'eUADk{!:k?LQU$vd;I$->.>r0YLDCr<#R.~`rcX.9oXgrm/}R%PSI4B1#{B~$#B6' );

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
