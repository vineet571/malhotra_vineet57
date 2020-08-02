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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vineet57_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'p32FW<c*P1Rq&vnZ@K-[=ht23+.3Ga#6.{BR|tNz=#=}R:?a8Vqbb.X-s-N~2A-f' );
define( 'SECURE_AUTH_KEY',  ' Z|]#(LF[OUoCxR3gg`DlF{3g_up^Hrh9c~+|B5debIG,DdA4}zIh0+:zZESc$?^' );
define( 'LOGGED_IN_KEY',    'Rm`J$@U8Ua*1s^T~C<|}Qg+K$.g!wr~^u:(rS=uRglEQ83*.MkRIt?w7@/gxcsTY' );
define( 'NONCE_KEY',        '|NK%Xr|uk78M) BN<#I Sq!W`K7UulDBE}>d29tIl]>jeZ|l2G5i{GiR:<T2k-eU' );
define( 'AUTH_SALT',        '+.Xoz3KCsC`^MyfoL.1#{b+2}Y!.g5!CrDp^7f(7StkMCq-%f;gPmIgh`n1Fl6&[' );
define( 'SECURE_AUTH_SALT', '5]i9VUoug)3oz3/V,kD2|LjF)n z&0y4<pSx9+BUCwF;1Ad,0rg4LDV]FEIr? dc' );
define( 'LOGGED_IN_SALT',   '_u)0nsB?Cttvbto3(HIZa^@`oqxPdt/:BTqciT(C:NV2q$/y@+}-:gxRTkR$XHMN' );
define( 'NONCE_SALT',       'VX%XlgNZk++k%/_ ;d5JMI)c,9l02AWXC{|;VO+07Tc^z?T11mUM!Oe)Bksuy;DE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
