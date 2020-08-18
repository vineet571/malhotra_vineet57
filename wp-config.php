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
define( 'AUTH_KEY',         '$6[6TtF$&FU5khj4-2h?a>M64{Dx6V6F}~SbHE&>q Uj-@Lt8,Y.37x?`mZt0WK{' );
define( 'SECURE_AUTH_KEY',  'o7HK5AC;`MXS-Tn)Nsgy6p.C~]}Cu#Z*sQs;> AlCW~:u$cn%&qA;m |i&kAfqD8' );
define( 'LOGGED_IN_KEY',    'n;}gT;3d|}mE=Aiq5BQQabZpvHoKhh$11~:)Q7LWJK#+$EE^cd5bW~ay5qVn1+;7' );
define( 'NONCE_KEY',        '_,k?[R=$+GSEKu]c|f`mwUFa/3BJL)*wjYWZH0Xu4[@QexetgLzMtA~:3<nE~Ws2' );
define( 'AUTH_SALT',        '^fF}v_jwFf1mjYw)aeouy[ix.x<x%jfRe|ryyXa[9ARPQ#wT,.y3LVb0/|^5fhlM' );
define( 'SECURE_AUTH_SALT', 'gVW5kOJKoV9wL=q!w-}A>_Nsv#q,@Kd+`k+XV6+#(yKrW6f4(}InSnN}-/TkqSJ_' );
define( 'LOGGED_IN_SALT',   '8AIRXG2_/e9-}t_>`A,92jVu@#-nQ:mRe#&ib:CyYmL%_Nlh(Zya0o U@Z}t@h#i' );
define( 'NONCE_SALT',       '1;$G8Al2(y9djmd/m0J6Zwj>bHqhV+C?6~4+!xF29h;US,+,c<I.-M^q&Df2=>GK' );

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
