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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Ol5]Ko@_oX0o=;-Q7z:3 t~.@Rf:-uj4$N]op<tS!6H&Bt$8Eoyc mY7iWNKUF.Y' );
define( 'SECURE_AUTH_KEY',  'E;S#qtE4) YW~#eAh|.n:DZVwS&MB1+ lK5u.Nz.cWmw<{YubsW%XqE6:N`U#og%' );
define( 'LOGGED_IN_KEY',    '!V?=q2[)O{W&N+pPQFVq1~ uZZY/p=v>6+e4/PyBcpb3n6*]6E5PcrOx+ 5qF@oZ' );
define( 'NONCE_KEY',        'G7zr~8Et,hGv5tR!Z0JRP#tvGDQ>bac`e/4}iqg1o7(|MxN{?Qkk$u>9tN.7[xr$' );
define( 'AUTH_SALT',        's!MrPRJ;iE.^z6Mo%tnR5!)>WZnu{YlVxX?cAKR cKL,qyPQ%O-62i%k~ta7v<1R' );
define( 'SECURE_AUTH_SALT', ' ?bZ~%e7OdE+5nB@@(qm8<]-m!D/!ue0lIe]/W+8uMFTU8W$> =V}WJ#^-Q0sJoa' );
define( 'LOGGED_IN_SALT',   '1;7b07Pq|T3VJ=`9NZ:B#78.f?8t%HT^{5/but7U2F<f53)O{8@INs6NDhDRHm$A' );
define( 'NONCE_SALT',       'w*G_i{@g,{%SlB30YKlQh:.<^T)(AU$/p]R!l,0SxifK9:jSnPUaha9[}MAjA6-u' );

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

define( 'FS_METHOD', 'direct' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
