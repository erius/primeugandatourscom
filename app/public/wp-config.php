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
define( 'AUTH_KEY',          'zkxC~dz/29K3VZWvi/S=lBSv+ey<<XP=Sy~UrfkiC_5e]`rq##[(o9}gr&9RADvH' );
define( 'SECURE_AUTH_KEY',   'rvKc4,Jn,XKoWmF.R:FV5dq}Kf$Nw6j _mT(vtXW4>qHC,u_k+1IZ]67zFP%PnRv' );
define( 'LOGGED_IN_KEY',     'b}~?Zf>+Xb4p5(;IpOZm(f8wWk, W_5!=+rS^4Eu{hoMJ@m39.iY$cX-><S!;;O5' );
define( 'NONCE_KEY',         'y][EYo/K1-&Ym;,]z^2A*mScw&Fztv0ygK*WBv<:m=kz:2F/4=H`@^u6Gr, }$ei' );
define( 'AUTH_SALT',         'm+3Pf!g+))puij%o,Bo: H!38y51zT%Ka@bNy,nfUc:rbTJS6~la5+>^3DvGdw^&' );
define( 'SECURE_AUTH_SALT',  'P$8F-fZDsZ?*&VFpM;&gnx8u3k9Ji@O<h.`7JsE}#.u?0FXYH]v=L/wl{wD;>P}A' );
define( 'LOGGED_IN_SALT',    '_l_<a0bXyvC<O*y-/ATqQ2;~5s6i>={7T~FzbG;.)ac{k^#Y[)?Y1 DZsOEc_zj=' );
define( 'NONCE_SALT',        'W_{-S=8gC4W}4p7j:UsOsCHD`+w8e1v<:r(d+LD;vh3,*dHTiz$e;pMg#j!{&@_j' );
define( 'WP_CACHE_KEY_SALT', 'K2BIr,pr{*e R!/)w84a|JwqybHObb#6u/mp,*-p1d8no@e@[du<w-?66T=EmR^W' );


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
