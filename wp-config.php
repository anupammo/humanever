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
define( 'DB_NAME', 'humanever' );

/** MySQL database username */
define( 'DB_USER', 'humaneveradmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '@dmin4Humanever' );

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
define( 'AUTH_KEY',         'VL1B{jpNgep9dZE}N@CTT||0H14)ekSgcK[jp?Y6|!uY+ldjdN*2gUb./(lZ#74z' );
define( 'SECURE_AUTH_KEY',  'tA:dz}9VQu]:1`q0?.4SxJN_fShZO=fa#6+/rY,2G$M-buPfhaZF0g.=wqKG8${b' );
define( 'LOGGED_IN_KEY',    '*mfs}8f/oE?_:{?;V+2-6jM`snEj~3+,KPXI:8zM;g$/3Qga@u|``I,YIcW+g-gA' );
define( 'NONCE_KEY',        '6=NG9wx{P9j:=(v3PSZr0[HSdlg/ND?qkpCf8>j<W1WPn9YW_C&7r5E@$1F^%i0x' );
define( 'AUTH_SALT',        'W+4v[H1X^os 0%7J_cpl~5t*4b@j7fa0ObaN5:pOo#%B^`?P$ {[NMPhZY%iL|>C' );
define( 'SECURE_AUTH_SALT', 'Eov(sWil)r TA/d*<2(fUNp2Kc-iQf-8vH=^kNbhj-5nEz)Q??M|G2yAezLib/ON' );
define( 'LOGGED_IN_SALT',   '{JF9Z*Rq%#>qR.]W>vI-7MX*RPj/85%eh`~!(k*km--%qo(Bo41}3aoAzl$&Uq@/' );
define( 'NONCE_SALT',       ':+5tw2>s9ee-`xSAIMfNb|dyB,rNXT&N@d9e`sTFyTiO@DtC?DFuG,y4|]r:f~j7' );

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
