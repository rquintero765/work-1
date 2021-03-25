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
define( 'DB_NAME', 'LMS' );

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
define( 'AUTH_KEY',         '.T:sWoNQ7Z;8iW@uD+Mq,jf>q$ttsslO$S<b00hSYpJ GBST=:|EF6Jien}}78^,' );
define( 'SECURE_AUTH_KEY',  'etZj$0Xeil.. b}7[f[gi QoTUw=w!lTNJPf9+l_p34&.KX[=.OO+.l*f3#6t=Fx' );
define( 'LOGGED_IN_KEY',    'Wr8@DQKMCG/Fi9aC($(f8-v|*~izjdigkc9uSZe192ozHGTlUDYed`CIgb2*+.A2' );
define( 'NONCE_KEY',        '%25&i)CjvUl5u##0Mq?53}ob[iJ-|rlO)}^T:rRL$E{8|>e2Fn(EbcwBSj:l;Dn=' );
define( 'AUTH_SALT',        'l+XO,BU32MxD7R:$38hgLTadFyr*|C>F0hiAt(!lm3&s!hUv)faJwRl7b^6qV!qs' );
define( 'SECURE_AUTH_SALT', 'LMGA`@hR1l;ma74})uX>,]9C(j=pcW*Y0NxQ?<k$aYaItR#B/cjTh4XcZ`E>~?kW' );
define( 'LOGGED_IN_SALT',   'qagx8 6&Mtkh{OkX-`*1$|2ix4]ptbPHhBew_gD auhOM9@zZNCXF9@NhPM_JANP' );
define( 'NONCE_SALT',       '%W{{5Sa|Np#i:xf}7Ioi~$otBTe05**eEbx&6  FC8uuCH=U*2^O9{3x{xS<#uS:' );

@ini_set( 'upload_max_size' , '12M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '15M' );
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
