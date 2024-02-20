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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',          '>7w1WKE_D@fQLbpcEA3))Iw4tW&[SX`}azsEOe$wRp;*G4{gHf>*d<x2[{5n7zh,' );
define( 'SECURE_AUTH_KEY',   'a*6KOP OS>9OV6qiRsE4fSxf8eU!HRiHZx^zMI=Z**B|;[M=#3koNE_edH|1cgUR' );
define( 'LOGGED_IN_KEY',     'Dcmfdi60]0cm^ O4F4`+kY3bCdj}>g1tHWZ9r)LZaJNvKmB7!Ae+NgWu2%O97_:D' );
define( 'NONCE_KEY',         'tOj:<GF?[SYz_{;pZy[^*Dz%j(4ewmV&oZ~=!wPiRzDDfB!V~gE&v~(f?^#7MX9a' );
define( 'AUTH_SALT',         'L0-*y2}^H~KTc$`{IP202{wLA7aO*Vx>rXhi;TvvbR04|2vuaD=TfUx<Yc^;(ATv' );
define( 'SECURE_AUTH_SALT',  '-^UT_T?,n!yLz7.0)1A9STs:}NuWPY]b,I/Py$VD ^70szE1Y*[AVWL.fyB&>U:{' );
define( 'LOGGED_IN_SALT',    'cpMNr-LS2bQ}Arz[M^(Pp5&SZ=>5R.KylPd,};z/ZNW8MJi~s{G4#yZoFlUJ=9,]' );
define( 'NONCE_SALT',        '=/4O1,b)4BIjyA:/:nmwXqm:<]M8H!UuWs:2/8CXewl(K`]yB*W0eWc?j#<lqGX.' );
define( 'WP_CACHE_KEY_SALT', '5doUF/.F}hM/idniY;{)%-XcD~QgqwAbc4Sx%,3TJAJ@ph%%3XX`G~BKB an/|-,' );


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
