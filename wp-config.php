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
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'cX^j[Y#3Pf[ZTu88&)0bP%p:-la.!f.vz~K}(r9g9RCCc>4agPl68{^/DRUdDGEQ' );
define( 'SECURE_AUTH_KEY',  '@OE9M4oL{rrU{=.jqxEe?-UE,%Bp}~0<cozl]lFr 2bK3^v2x/d6W9gj8{/Vt3+.' );
define( 'LOGGED_IN_KEY',    'tN$f!|T?)z)Ml&3cKQZ><Tpn>lENIn m2C`JuF.ZNaNP3f9D=@NES_<xRd)ayk=m' );
define( 'NONCE_KEY',        'icLWM&ZczBnDM7+*]n/vVyZFx#I4A_c2ie6)8$l?1esn9QeSz[*ydLWB@+J>{BNf' );
define( 'AUTH_SALT',        '0}kPB[ V!z}kr]}_:c4sZ7gR/Q&@BPp1@C6H_`L(d)U7]:nwP9_1%N8}rUg>KSR+' );
define( 'SECURE_AUTH_SALT', 'VRal5n@|$<<M^)KePi@+Ylpay}_E{oNL)-9wx.D|ON6_d_P^Dx2Nzw_Dgqp[SGa8' );
define( 'LOGGED_IN_SALT',   '_$@>OxC.[d?M,`,&037>/+gKe.ON|oVGI{[!R$Ph/,qdI6HO{<eWvZIRSc{#EBs6' );
define( 'NONCE_SALT',       'VUFex[.)H5gsSVc_EaA=8-z_O$xM[Gm(o@&gSPy5&Gr=1Y(9k8eTChIqAgKDrA,@' );

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
define('FS_METHOD','direct');
define( 'DISALLOW_FILE_EDIT', false );
define( 'DISALLOW_FILE_MODS', false );