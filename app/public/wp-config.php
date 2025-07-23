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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^&xwyQ55<zd|2Z7Feq<<IF/jHX`y/{[cmG$yOlzPor)&H{$l!9D?S&RO:eL0Hny$' );
define( 'SECURE_AUTH_KEY',   'nr0vzTYkr#Y|NC&,Z;Q0BJ:vF9#[oA1*W^_*Py=& ,?I/*|g(OdO}z:q0hkFvp*P' );
define( 'LOGGED_IN_KEY',     ')2a(aSxcyfdzp&UE`hil*WN$h;zn4R0PwD/cH*?&;8# ?A]$[s4Kn[QjN,2 #taM' );
define( 'NONCE_KEY',         'Z}?!^b(8*H&QO|qucl&k*X~)nAnE{3!Af.lH-Ni}.4^+Db.0EGZZjHW$na:S#?lv' );
define( 'AUTH_SALT',         'i`yb#D2Ew3-A4>I&{Ewbgzyt;X_A0BEJH}9bKfHc:[H:;0a]k[Eqw2fEec^<~=|}' );
define( 'SECURE_AUTH_SALT',  'Wqm_:IyM9s<Nj6K:pGsZ363=#PE0h;7eRMU;eew<r*)ytrh?.a%,^~(T$IK`CiVy' );
define( 'LOGGED_IN_SALT',    'md?Bv-#$@P&BkEZP}{Lbid:To|/= cRWL.`&:+UG}K-8H><}jbt6{Vk]gs`R)v|<' );
define( 'NONCE_SALT',        'E6!X2C3eESQ2HI~-vkPzW_+A)t*s#8W9gfUSj/pLq}?+aK>V((SXe [7C]tD>MwJ' );
define( 'WP_CACHE_KEY_SALT', 'pR8Zhz=Pjos+Fh4+?:CZ|JVv65</N>:e_o~kEJO<ELL3f3-oUWgtTe6>hz6&{>64' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
