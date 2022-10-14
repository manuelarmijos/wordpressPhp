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
define( 'DB_PASSWORD', 'manolo1994' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY', 'cnQP||6)L3ibRpc}_*;@gZQqo)4;x~LQ/.Lb/4-%ELyigw>Uuj`NY;7-Oe!{BzmN' );
define( 'SECURE_AUTH_KEY', 'i 3J|&swJ|!KsY*b rptmE&!@)y9Er{,rlIN8R:ksd?rce_qrH7S&3@kMx;It=MA' );
define( 'LOGGED_IN_KEY', 'eKn!M1hp?YC}?dDhGg<v,U6nZ4L-iP*dBdwr]Ve#Ru+t;[gYiMB<L_tXoUJ:@el3' );
define( 'NONCE_KEY', '?hAJ8W0SyCV~4aIqbmxVv4tKb7g5J5XfwYHV>u:59nzVSI/,tX<)jWX4b;WVPVi9' );
define( 'AUTH_SALT', '6:<j;,`Z;N4j@@8up/Wj]WjH_21@> 31YwmR)_X3=,55Kxp$d6|^poWZ3~&5pBO|' );
define( 'SECURE_AUTH_SALT', 'L)4mN@=S:g?2RBg_y6PVC*s@E[eIrB>?EV70JwNckXe>~h&WCBqNbme0-~>noJLx' );
define( 'LOGGED_IN_SALT', 'LUT|5N$Gd3v8<E!srS@+ZG}V=5mt}::c|Orox*Pv;>E*9,Wke@J-:{5$hENljM@Y' );
define( 'NONCE_SALT', 'jOkFIM}@TBmV;}o+!:%%-Sk%bV N<u{^QUDy|hDZ]l_Oyyw?yL$b2s7RCS1-o$wW' );

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
