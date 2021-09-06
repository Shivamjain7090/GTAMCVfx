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
define( 'DB_NAME', 'gtamcvfx_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '8g;S1Yp&+sM)=C(!pFyz%M%W,wgy+Ib(32<|Q,YsEh%Uw:Yya`^09!*u-$>.pm8)' );
define( 'SECURE_AUTH_KEY',  '#lp:C[!r-(/d=-#:>1GFY.pZjJU8Cww]WMEXob)@;8BA&7.e:BKR+Y*bNidx^(ms' );
define( 'LOGGED_IN_KEY',    'oeg^|}8A5=^s{|vCv.VTOfo%WHFV=>%~ND~dPY@qpwrg}{vpiB0OEvDI8kD[.rIg' );
define( 'NONCE_KEY',        '1$)sWvGqd+*4:pm)TH@;Ldo:>Ad}c<Va,[?L?[YJL{4g883)@*&9-Jc*G<Rsc&!{' );
define( 'AUTH_SALT',        'b]nGY&Q`$c5Lua_Fc%Buv8tOTX34%_(.%]R0Pz%Ss]x&gf:j_(uE%(s&`]tL~f~b' );
define( 'SECURE_AUTH_SALT', '0YpyH/^Q^/O?QaHy,mN^] QT^vFhcw6#5YL-G4@MyJBH$:J+f)Q35>l#a2:a?>%Y' );
define( 'LOGGED_IN_SALT',   '7cHnfDin3tuDzyu~XmLX3CJpIQAz-in.sTGhPm,dO>Mf+Zb=Xp(?7,&GG0?2sU!,' );
define( 'NONCE_SALT',       'Fx}|K98:p|5J8HcizwFNQ9!-`Khh>_&C=qB^9fXFK35TonUUpogR3#lRyt[apHRd' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
