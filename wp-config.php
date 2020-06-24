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
define( 'DB_NAME', 'devasheeesh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'AyLc!:=d;A[^j=opUZLp#fTx&@ILeWQt9L/V6IV=rdPj 5#Ye1;=D>?Bdo&{K/0o' );
define( 'SECURE_AUTH_KEY',  'I&C)/S/xRnSLflHhOIc%+5|aBvq:skfq5`z8tX_@K$cQem8*I8_cqu++W])z5SU)' );
define( 'LOGGED_IN_KEY',    'K6iIwnUYKT-8mAEbApPMj{y]bT`H[c60rv3`C0;z31IR,1}6Fpb!rSb>F!eS02JP' );
define( 'NONCE_KEY',        'Ecyh:&*J=2f:lH*edW+{Czpjs?}L>y@+iFd0ARDM<Fp:W0, Kci4 j3T9juPiF&3' );
define( 'AUTH_SALT',        '_6f4FU|=hcj>Q/`lPv|/ru@&Aia!KBAT5.V@r{PIB!x)DQw/mzVI<}*Ukw0[umQ[' );
define( 'SECURE_AUTH_SALT', 'slT7wTd]k5E:N?]M:jb-Yd(=,o3=o&<-/sp#Vdrt1]w(__E,i>G-giBu,!_~6B7W' );
define( 'LOGGED_IN_SALT',   'N>s:8!iyP~:=3PxnDebO~Fb%@V$`,6TT~ke.-0vc0bz8yt)beQNmdh^X$@$]JhN7' );
define( 'NONCE_SALT',       'vGyUpA%ZaK>%g/af(.ESx0~*wh1h@xvB)4X_Y:qko8#EBhv3T2pZHK0>6!LZdw^R' );

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
