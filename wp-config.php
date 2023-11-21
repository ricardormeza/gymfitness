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
define( 'DB_NAME', 'gymfitness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '7Wu:r@eeREiS>2%o<?/l$OLy+<EW{YV-*JJK(zr*$ZSZ@el`W4Hp.`+xo*/#V4E[' );
define( 'SECURE_AUTH_KEY',  'r?4RO0z]|t.Vh#:WRI%A+A&?7{>^NdWZp1Agrss#`]qQ xP)Se[t~kU3!h^UJcsq' );
define( 'LOGGED_IN_KEY',    '``0R*Q 0}MeFQaAqnM4WLk<>Q.;#Oa%(?hqEV0-`y%5I-xf8h@vE,L,;#P$vZ-[)' );
define( 'NONCE_KEY',        ') yRJ^~&<JhpFKN1/b|o|8.eBAr.k,lP}C%qP3PAV}pZ)bq%Xe >_&to5;Dpt*zR' );
define( 'AUTH_SALT',        '; [e8<;t:qMz<N9jVTERmWw(t<bqn!1)&$n3EWAF!p1xFVEaMRA,2nrv}d,.vs*0' );
define( 'SECURE_AUTH_SALT', '5vp.DtZ1{`$6l}2Bc+_DQ(q~.7~G-2?rQMRRbg/)j%/Qpyn,YdwpwN68~@l$BV_[' );
define( 'LOGGED_IN_SALT',   'x2#yR^x(TgO?kin)hnVu}P0c-bu-&[DUATPoVqqGZOM|>=X7>UNzp[TdO_/M1j??' );
define( 'NONCE_SALT',       'VcBn1,hz8Cc]{UVcWXp[y6c&7%J;Hg&&EXxo@[Yg&1mLdZJ/X7:q/0~}i-A3q X%' );

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
