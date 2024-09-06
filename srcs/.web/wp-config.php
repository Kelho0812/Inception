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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'mariadb-user' );

/** Database password */
define( 'DB_PASSWORD', 'strongpw' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          '{Q<xzO>)/[:h}T7zZLEGbVIrF]9KgB1?C3.s]?]k5 4]U2glOG|*3/TP7@rR!jMM' );
define( 'SECURE_AUTH_KEY',   'Ct!AKIG`,||@8X?@ZkD0-X`L~*AN54N!a$?@=`t*/$Ls#MYY]6FUx,.Lv2f4r{6,' );
define( 'LOGGED_IN_KEY',     ')ld@s_X)EYK[9Nw]nF46e3olr|hFhB%i5c7AM;8}tOWxwah>A+l4TkqXJu-6<uxN' );
define( 'NONCE_KEY',         'UE596IJqt%c5%Jg2=4;}M3:*N)`M#stMKabV0VY=^O~1u8e6u=aS&|)pyjFMyEfY' );
define( 'AUTH_SALT',         '7/u~N?oP$S`Ic0V-)|]+%5[1G>r6Me@e^B[$ZZ!f`{A.muYc+/,4{<&yX~Y.xk!>' );
define( 'SECURE_AUTH_SALT',  'HV18x.sA!|bj9n+%DIr=@^#P)u$pVrfzo#j,$_|7s~y=k5jB8nFHn@!07Udk0+.-' );
define( 'LOGGED_IN_SALT',    'BrA|:=qK.~na%rK0[X9,+mD5r9`qFj|*Th1;mY:xz3NYk~e-!H1?~{o56U{79Ud.' );
define( 'NONCE_SALT',        'u >w[54K)Kn?PobV.b}`~<cO=Azuq<~mIchs-{e3qH<V^~WBCnL?rI:4)5EQFn;x' );
define( 'WP_CACHE_KEY_SALT', '$NFQ4BB!W@*){0[tEIcGF[/1(:z6=0<=F$qq_Y/v+*9~Jc}$_o?;vfb4GQk;;95E' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
