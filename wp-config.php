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
define( 'DB_NAME', 'rezichem' );

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
define( 'AUTH_KEY',         ' S-ggMV|lYn,TcstH]g6%(%!7z( I@&5|k6_G~y]3 Lz)ewIxk-T ?,+Uqux5ma`' );
define( 'SECURE_AUTH_KEY',  'R]uD,Ut>Tg`hx-D}v:L+7Qy$222rA^ ,wd#||y[i?$IVfYzu[#LBl_^zp3Sq:9e/' );
define( 'LOGGED_IN_KEY',    'w2X45k7aGnF+(k6?N:<4>Q|YEWzOy~JtA,v!3D-9m-ZjL(t!o)xPq`+_L+.UM W6' );
define( 'NONCE_KEY',        'B0IQ.M({2r[_OC:8^E]Km%+mbEajkDGj8K%*25H~g:L*[/;q`(,:;B>Bt$ad<XWZ' );
define( 'AUTH_SALT',        '_w|,e;gok#0.R<^U7SI0tf&7M5WFch<^ZE@Vz)%pqgg9C,*nvF?$/9WhWY6p>BR3' );
define( 'SECURE_AUTH_SALT', 'wn+=dPrM0=L~C-=1!MG@lhD7IC ~%(m}o4-Ne19H^&J^Yio^XMV[O:Ze[2tis?FW' );
define( 'LOGGED_IN_SALT',   'qNhd!6DvFL{.cgJPwPFlNeX32t?MFM W$APU8K.F4cd<C{)QbD~ J$Sz&)Dn6N,K' );
define( 'NONCE_SALT',       '1/P@@lOyXFiPcMd^Z&[xw)LibXu)GB}c{l:EN9W0%5IUC*/<zhCpB83|DiOF@KF9' );

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
