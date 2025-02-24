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
define( 'DB_NAME', 'db_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         'V2[piCW1$rjLa|a7iJ!fS46?rK&o!B(+p!M=Uc?:nI`V_6.hAowDnRe?Or@WmS$6' );
define( 'SECURE_AUTH_KEY',  'r.Kt0Q$]4YX*?R0JT2fqA>C6Qz2ngJ%NrhZ1vmGw`,9Jn=a}6ucj@#Qe:9`H=&Sd' );
define( 'LOGGED_IN_KEY',    'Q{bTBv}KK}Uh@DrLY,6=3a~p!H0M3;,l>jeH;70:UqmO^%C&Y6BNz5lPF?$3J1=B' );
define( 'NONCE_KEY',        'iKvzHQ<&(esgyu 3<~6w!>#H+gg_eFb>sgZ]:[rVbrw>nkKCwN730xdL6DFAH%cL' );
define( 'AUTH_SALT',        '=4d1:fu6bv;Lr9{O;S$aj/aY+WOn@Y?vw8AB3bGBBSWGv3#g(@Z3Yn,a? NEPi>G' );
define( 'SECURE_AUTH_SALT', 'X;#)4x[SS_|yA4ju<kb>-y(:NS$Y1e$EPF~3HL1g3ASL:v|DRI](s?]bp.GbN!kg' );
define( 'LOGGED_IN_SALT',   ':K?V,ogAjGzk]OrU6C3ef]L? SMugCC~XYXStz0y6&C#6AF=_i7u)*]#tD_F.&`l' );
define( 'NONCE_SALT',       ' Ut f$bn.lnpnl<F44$Z*JLje=$NyQMo+h:#*Gmi4wy$LfSvhPF (WZ;n1zs<:Z{' );

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
