<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prvisajt' );

/** MySQL database username */
define( 'DB_USER', 'saley824' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nagatomotojota' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1)wk,gD ,qpp52OG!Sxmc?B7qzG,IG7Tn#b_40{J7Q?{{gRR$]-}X9|pNOOcu<oB' );
define( 'SECURE_AUTH_KEY',  '$,5ab?|By)wVK~W|UqFv3egfSDh>f|%xx:H`00U~5&o5^k3s=o8(xYq71 b9iyw,' );
define( 'LOGGED_IN_KEY',    '?M/@=ph9yK8hB*9T>y*p.yo=w(Mo+K-F0/igO?jt/zzQ#$YM0c04qV|Mi7DgJ:/n' );
define( 'NONCE_KEY',        'gCQ|!a45D`l}fIaX&n1x}Jz!Em7pn+~,jo>n{~:`lk=,-tj810cpq9itzDP@=xZ5' );
define( 'AUTH_SALT',        'qcyGj8M4_B,g?MMf&A@U6#J@(`Dz$An9,f^?=x^=GJu=_VxW7BVrC<u8p[XX0{Cf' );
define( 'SECURE_AUTH_SALT', 'ODl 0[=r3d<u.5TeE-[.XxOTy7%_?XnNFKRxo+I=N#Ok(Cl%5|e{?1XRughY=Ttz' );
define( 'LOGGED_IN_SALT',   '*YZS)SBa}vxM H:z,b:]07Z)aqcT3yDC8PWCyEb3-EIZ6V<hQiEk9:,M5IqYj)O#' );
define( 'NONCE_SALT',       'oWX6A8@la$T)||hR(H{N1BiP<EJrIjy:O:?i ~g$pB<.SO2^%^`jLfTVzgF(|+$Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mywp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
