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
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PGbJj3x9hG' );

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
define( 'AUTH_KEY',         'Z_K;5$3HpQARd#(_o,?=Eo*g,PdyiaW%^@njoMMrz@2/#LT F(|zDjp6NxdmU5V7' );
define( 'SECURE_AUTH_KEY',  '=.XZ_<WeLcih$L5{E#b%NF}(~#{j(V/#k2.=m-BPN*9;LB}1i!0|X?(^KJ1G~^9}' );
define( 'LOGGED_IN_KEY',    'r_NBTFX~S|&: 4n;9K.vbyy-pBi5;f?N]%gc%EzI+[*(&0`DW2t<@p. =|6@ZC>o' );
define( 'NONCE_KEY',        '*m)C?K,ruDo2Y`j2wzc+qm2Evgf6-Xci^]B=0{aSeur{}r|JyN44I7D-?| .phqe' );
define( 'AUTH_SALT',        'dd+1Cqg1Fh!!GRASKFHb,J3mndG3YXRA5dA;mYxa*Dcy8~SJ<y!KSYt+RW&A(7@W' );
define( 'SECURE_AUTH_SALT', 'Sk8`R|unb>2>EdK7@k(7or~La4NG[fawO4VW6LQutdCnBANE`9GPe fe,XOERoS2' );
define( 'LOGGED_IN_SALT',   'hluW_~w-D`1FAN#p~.;m/ZFN)8VuQn|$R56BQ2.9UOzj{Z82EK2w7:>j1u2mC[J2' );
define( 'NONCE_SALT',       '3q]@Ta|.lr&Cw:Fovt)<7R16vv5IT5R#bm.zi~1C$}(_hhN.iN&k#t|uQ^2(8bU/' );

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
