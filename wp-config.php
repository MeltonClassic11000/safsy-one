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
define( 'DB_NAME', 'sasfy1' );

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
define( 'AUTH_KEY',         'SjlAL9UDA7g+k^h7|SozmUXP7T+T>t2+R1oMO8dV<!L,U?sdEl|3ME-N;KZRI]Q#' );
define( 'SECURE_AUTH_KEY',  '>95u9*oWNX 9~a~A.6MBk?wygp3>xx#nni(VHD$90q;Qz$:fMQYn:` Orb4}8?t^' );
define( 'LOGGED_IN_KEY',    'vkLW=&b~vhNo:XzjK}[;Iw;2e.x*u@(R|tfs&P}mUM`6kT_&fPH HX(KhS*-zUe*' );
define( 'NONCE_KEY',        'q,VLJ%A.g0F,$t.OAv-6-)Mrc}|vA;|,@ 8yFR/P$f-Qoe9QB7e>Bl+@;l.UxIX}' );
define( 'AUTH_SALT',        ' {jU*tILhON}Fb&:GV&p- M Izolu/j=.$A0nD48)VIMmKa)nhx]u)r8neCJ3S(I' );
define( 'SECURE_AUTH_SALT', '#}L}!Kgu-bekp)p2DF.N]PeNQp@fU&_Tqcj2;^9i%a[G,.ehpkN27O}L<WZO9(R0' );
define( 'LOGGED_IN_SALT',   'MaHyR$ b.lNu&H^z2;)gd$KM^YAv fg9l.:3`=2h0{En/Vt4y /3%ZjFoA8NtHDl' );
define( 'NONCE_SALT',       'F,~Z^|DEEhvv^(^WY2<p9AY WG?YZk>ek:1y&MIh7}UE kzR1$CrS,bEptHphYy.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
