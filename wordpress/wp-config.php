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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{ gFx:(]DfN[?K*g|m3L9XWobO,)%.pV!JlI-Y<Na69c##Md^jzd+vL^aLA;V7eX' );
define( 'SECURE_AUTH_KEY',  '*bX;*^(xh|mY$FGa$0|gj28nPlp3y8B(:z+2`b;[Nw,.[G~k5-qWp`8Gh1=g;?*,' );
define( 'LOGGED_IN_KEY',    'LjA%X|Cfe6LL-k|VhS8Ui~/J:*=(HSM{Wi2_==URTC<Fe*HuO[iE]sJTL#}oc*?z' );
define( 'NONCE_KEY',        '*T dtT~$(,]F?;nT=nX_[noEaB?-S@1Mb7M@7zF{tC9540fYkQl7&`]+6benc4FW' );
define( 'AUTH_SALT',        '6ZX+#h%(c ~&HFX.Km:DB.2A*wVRSmC.qBm!bS$|3B&K<UZp{{}pI.JO8yO^aFp7' );
define( 'SECURE_AUTH_SALT', '#R3@|:x9+T9</Q;vPMC<c3aqv1<)/a$=i2mu>UfBK!l(~0jz}E27|?#Zj|7v/zs?' );
define( 'LOGGED_IN_SALT',   '4xdCMilj-4!c[Va.y}3LR ]?#WN8b^2R7 eMuBzeGqoQ`PaNiTp?V:XfI6^#os/#' );
define( 'NONCE_SALT',       'Xk$2%g2H f:tgv?PQ&|g}J:v&Z%pI5a|U8fF| sD0`GmQlR<!#f,;~V5J6llUkX)' );

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
