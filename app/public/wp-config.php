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
define( 'AUTH_KEY',          '9].MfO]dpW3IA!J7!N;heV4Wmu2PQYNgXgzxe&s1rTSZyj_3P5%Lf/tpBQu*-39*' );
define( 'SECURE_AUTH_KEY',   'x2;)0YsPXv]03<Mo9VBB`!l~Rk*gX<FoFfG$i^7xh3trO~ODB3z*#gCmc{1kFD*Y' );
define( 'LOGGED_IN_KEY',     'Z`Yz>Paa0e|RRI}iVkXYg{?md2_{2mQH]cnSH<H0S|TN(PHi_AGpmI&ji5JunLSi' );
define( 'NONCE_KEY',         '9)J}.yv{7D4~[h|o${!Br2+#fgBY;v8Mu`|u(S}0E?#z;_RGo5{Fn<6%rt%7|(FP' );
define( 'AUTH_SALT',         '52np8^I9SNgP^OcQ$R@zpgZ:3NPUw2~qD2mq?Sh#}7bM5d2JT7QO&$)7I!.hx%W^' );
define( 'SECURE_AUTH_SALT',  'HYf}r.mD+ &tXVT~lj9XlBhM42#8G)TTR$yKK6mUcn^V%2mloQ.INm0iWCnq!2c>' );
define( 'LOGGED_IN_SALT',    '$GuCYUKmB^%}n*8HA]|}E8Ftfq//Wj-x%Vavv|vLbt6]ciDpwGR rX-nT/d4B>go' );
define( 'NONCE_SALT',        '`-n$1W]Q~7E!Is/H^dj)gd!&4ifC0GSV;C4_e<3J[;4-tJivy&$]MmRBvFk6yv=y' );
define( 'WP_CACHE_KEY_SALT', '~lMr[*5A85aX<-pTpk&iu/{!lL8l-y,)EV%/T: .MLx!*D1XI2{CE3{s1j@1aomo' );


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
