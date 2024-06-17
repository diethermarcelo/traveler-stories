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
define( 'AUTH_KEY',          't(0^Co:]/)?#2[Kkzx.lYrw~!]P( 0f@5J#A}QLB@<V,t?t1ik$n|l,;DE2Vj)+(' );
define( 'SECURE_AUTH_KEY',   '}^6et2may65D$IuBAxQmd?U3/=(9$O7-R0y_Bz&qpEVYU?f`P{~.:6fAp1&UrO=D' );
define( 'LOGGED_IN_KEY',     '%8!]S.FKWvQFfy-}dgM|ElA#&4_{lp(3ytB3!phsg!=&0OHiArj*i!<MzeyAtg<b' );
define( 'NONCE_KEY',         'rPtfiqX8D0?%F1Y6HJ)c{pWNLH)rqk;#({<=d={9`kP>GTd0[|piqgXm={TTAf.o' );
define( 'AUTH_SALT',         'Mw_Ulm(D,izM_5pDrWQ(T1ppMKh-AjSP;sy{The1hLc/b~@d8(;*m8{<{$n| 3f]' );
define( 'SECURE_AUTH_SALT',  'Xp:|4lmw9D?46~L.(4wYryJ[u(tuV~7#87_PO1|Aq)e+3s.TUTm%:NPK?cObq>Z#' );
define( 'LOGGED_IN_SALT',    ',GphSg<P_SpWv_k#OUW$!(_981+Tyd0C}>3[q{~J>qF9U@6awpki5Uk9M$r.c oy' );
define( 'NONCE_SALT',        '_+7v40?R!~Uc5xCEJaId|07QobS$}R[k[aTIJJ2hj5-W46wadPN}zJb9wz;dC%9@' );
define( 'WP_CACHE_KEY_SALT', 'TSKF<d7gxYqo1Rxld]U[0a|B*v@}ik]J$E1xe dLfZW:(Q#C9|4oz=uV$tLtqwE`' );


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
