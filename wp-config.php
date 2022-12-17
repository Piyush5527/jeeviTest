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
define( 'DB_NAME', 'jeevan' );

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
define( 'AUTH_KEY',         '/!]5s|_4#/?ddzzMssSWW7 [aYVwiDD[$w`j8>mmuhZ2Z_qs<X OfgT=3c&d@>)?' );
define( 'SECURE_AUTH_KEY',  'sMoo.7JmYl5uB6]Q&l|k 4<K7ynE*oh*o/k]t2^0V}xqGhwC201Rkyvy),x0PPYq' );
define( 'LOGGED_IN_KEY',    'ap * 4#sFK*(};0kmV709|Ggu&3+o>9rC&7.[n#2VGX=kCM&hZQM.;A6Sfg1)1lS' );
define( 'NONCE_KEY',        '4|kaReX*R[H=Xu>;mBvuo=6i)Kw(o);[xQdTNu2h )z7-z+V7!2/f*;>#? h[d9e' );
define( 'AUTH_SALT',        'Zc;zfxFu)&pB^YU`6O~(4C2Zu*4E/#F|>3udq g%fxv~FO]Vhthc3GZ`tc`Wdzym' );
define( 'SECURE_AUTH_SALT', ']h/G5WbqbIA&3W5dV pD-& %Qj}<NDGXd-tMQQ|Rem/3eOOZ?F.5xF:BcLGhEcjm' );
define( 'LOGGED_IN_SALT',   '_Bscc]UMp5FCYM0g_VrOv9vF[YB3WWaw>{B~^720Fob<DD2FYR:xT&=4|QrhPWq3' );
define( 'NONCE_SALT',       'Lll/[aU3HO82//F_196UYN8@(=K^hXn2KwR(x%-:HPlMws:5m2Wff)nTOc@2H-~F' );

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
