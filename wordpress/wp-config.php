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

//https://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
// in some setups HTTP_X_FORWARDED_PROTO might contain
// a comma-separated list e.g. http,https
// so check for https existence
if (
	isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
	strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false
) {
	define('FORCE_SSL_ADMIN', true);
	$_SERVER['HTTPS'] = 'on';
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME')  );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '0e=)SSH=@E2(aR^|SWGzo*Q~}4U#YGvF3H}eU(3TNP|b+|<j*adF$TwVGlcbdn+1');
define('SECURE_AUTH_KEY',  '7o5_ CVk!D%35N<g:o!LQ+H-?N{|FX^Ts|+hIk6v5|$KS5an?<#fbt-S3Z*Mj^p]');
define('LOGGED_IN_KEY',    '$jfC+2,hRtQ7>9[.~c0ON$X<!fD-%17r+GqaFWJ4+S98A<Hi^=E~X82BN@iLr^}`');
define('NONCE_KEY',        'V!YL7!Q>9bewK)-mh 0xtZ5 |]u,8]{}&+T=vs+Ds; YWTK#8J|&^n$>#}hOH~cb');
define('AUTH_SALT',        '^R&:B@|V`(SmZ1:ef8mx7>K>mwy//BP^,IDcrpQQPGT9?L.YA^DP?*|<7!D1prm}');
define('SECURE_AUTH_SALT', 'Z`S{4j^]L^LqleG,LIb(ms*vdAkZpRFqoNv#;VIbrpbu3|q-AT#|{Ex}gs{.eU$U');
define('LOGGED_IN_SALT',   'w+8IXc9TXkGyR@3o|[X9x-x4-^oq588Wc..a@K.F,du3OFE~/llNFT+PpGzh;=::');
define('NONCE_SALT',       'Lp[^SX6=(_&41=4XYVQwE|P;5Edcx?9zB7eJwb?~M%yH!+eXh#T4Rt`Tu/#Gp?:x');

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
