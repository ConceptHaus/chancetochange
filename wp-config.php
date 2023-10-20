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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'haus_c2c' );

/** Database username */
define( 'DB_USER', 'haus_c2c' );

/** Database password */
define( 'DB_PASSWORD', 'Azi8914less.' );

/** Database hostname */
define( 'DB_HOST', '50.87.153.143' );

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
define( 'AUTH_KEY',         '#]EZE4##!RxMs:fuk)icap%(&Z[|/e!=eT{x?@m+<A&FkY~_.Yp0cQ-ESwDzW(U)' );
define( 'SECURE_AUTH_KEY',  '9<n-b6^i/X>IaTxE|+sYHds9YD6xK&`KD]YEq}vIRyH}!o%!>1<Wg}n8(ygPbEfT' );
define( 'LOGGED_IN_KEY',    '9f2pU?%B~fN5ls42TL37mW_K1|HF+Jt#YN|ihgVG(doMaxqjk4BS3-?(qLRhY+?8' );
define( 'NONCE_KEY',        'dYo8{rL^B1i~W}CTQ*1O7JuOWa0Zt&h+m[NrR$ ejV>7Z)iPz?.%?Ww7Xo5=;l~E' );
define( 'AUTH_SALT',        'z&|LM{YJRf3[!6teurv5@2!?M!/KH2&KQuPwwMv:/(a]<wJS8td{Q{!}1zJFt8(.' );
define( 'SECURE_AUTH_SALT', 'djg}Q%>*2=Bszv<h`8}$BA~=?R-o3+w5>Im%m0u{4)^4.z 9-Se }8}%sj:X xKK' );
define( 'LOGGED_IN_SALT',   'ekMG850r,f.Hpe!xGZCpA]a()r:*Aj/@ygn/?a^<F4VM_-[8nmat?K;~fx:UN/^V' );
define( 'NONCE_SALT',       'Uekxat[!<$j><aqJ3i(>l8d?}Mw2/`+E!O#=_os:;Luk|K0UW+%1=Qm%)j6%<*PG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'chdb_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
