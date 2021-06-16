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
define( 'DB_NAME', 'bazareart' );

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
define( 'AUTH_KEY',         'M87?rhNzDn&37d^^;FmxfTu,:p{#JPkRzdA6I>#g|Si4Z)>(F_,9])_y==ET`;YD' );
define( 'SECURE_AUTH_KEY',  'jv3gY cQz_BhUElhbPZ:#Y8^y|v(hmurlNg`koB2%QIyAJ>(K|S9@f~f;t/NW*-Y' );
define( 'LOGGED_IN_KEY',    '&8<,<{}`vp0ZEfbR8)df=?Oq07hE%@sRygP&i(j$3:k/4jz~]TxrFY`uAC*8HYS$' );
define( 'NONCE_KEY',        '};Frhb(Tvq=NHk<SYWiI(7[xT8YRXq6!~o,Wn&vXPUfjgK|yB>I8PD7]/ ,;4HQS' );
define( 'AUTH_SALT',        'V>8fe=uI5 /}2jlR.r<?O]X<i3Ozm ;{u>CAkoA=%[$a0qrJpPt(Ql4rjv*~Y ?>' );
define( 'SECURE_AUTH_SALT', '`G[mch`]zDZ.UIv-$czF}3)}4/Ee^e?}}#GK=ov{;L??v~=8MJUYg34{G{|%HbLZ' );
define( 'LOGGED_IN_SALT',   'D00ow,}ayY$1cVYBQ&A[?dh(Uq)C8M51k!|<K1~?VHq&/wQu,} k??^wyPNUt:7~' );
define( 'NONCE_SALT',       '#)aF?rMl@tmG2j#0(4m-xp;3szE1IJxVf go2w{Pxd|>-isByhwQnv[asMD68FVO' );

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
