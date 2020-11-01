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
define( 'DB_NAME', 'gftofficial_db' );

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
define( 'AUTH_KEY',         'F%>Z<>o,3Yp=OS@t^fsbfe,B-c:f8<}5.G+|fs`eab42c;uZ5(07<g@C5x`I%<1(' );
define( 'SECURE_AUTH_KEY',  '>&}2BW@wnaym.7g@K}Wq{?XeQ5-5)gZoU-EJX)b/Tu[CS[Je_O8,3,UyZxtg9gKB' );
define( 'LOGGED_IN_KEY',    'uP<%^fA]EEcO3q.uOe%nQUDjxX~Dx:Z%4XW~KCLnfE*#^,5?J,Z9TIt_k#Ii(dcY' );
define( 'NONCE_KEY',        'GWFG6`}xfT&D:s}9`V l9J$]|vZmH1i0@$mu=P&oA(6 PSTed4!DF&O4MUm!fsu4' );
define( 'AUTH_SALT',        '2/tK}HYcaQPozE)xD5GlB+tREQ-1N(mQ_YbGsl,iFs>cn?xL9H#mJ^T2yBY7xJDe' );
define( 'SECURE_AUTH_SALT', 'nm$D&>!TFj_k/ =?:Q9_CI+nw!Gsp]T>tu2=1pD1B^cl?c4-nG_:_ml?JAyVF8{~' );
define( 'LOGGED_IN_SALT',   '$_g6`2@&zwbu#5(&18aU8{v8.nZ{wv$0_OagskY]VL3o4s3)lDS,w;=~<p`=H7^_' );
define( 'NONCE_SALT',       'AWcIUOFy;C-h;OP EsRfJ%<A aJ{Txrk-Tk~{QRh /`9#S/ (c=JfAS35lBk(3Ec' );

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
