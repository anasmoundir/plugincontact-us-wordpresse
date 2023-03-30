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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         '9><|RRjccV#a%:s#+qK}-=vGQajh_Dc@x%L`BP5bN2oN$W5qYU^rC>6(V7l9*:jf' );
define( 'SECURE_AUTH_KEY',  'hK7 x}P^3Qa/g l01eIIn&3Dd.FMjh!M,iRe|kH_<m(TCThT?sZ>J,9rOsnG)ls*' );
define( 'LOGGED_IN_KEY',    'm}&;En2DYh3uH(gKq{%S)np6b.wZQohCCx)o~nZ>(BCqA31EQjh)`YdU@~+<Yi,n' );
define( 'NONCE_KEY',        '{O19RNJ.eNP;m@i60+s_r59;8wq(m;#<PRr|1v_>}.%M@vY<=2 IK?0Gjd6^eO~I' );
define( 'AUTH_SALT',        'YR%v/En8[dL.@9U3Rs};sRChuuL}TXm[?Uptnrd~*^Sy-Yr1WOXgEiooTXf!eE]i' );
define( 'SECURE_AUTH_SALT', 'e>/UYdYW)gV {e)CY!{i%eZws#p!VkKak=>M|0I/N4ExB)t)bPE`M^J{^p9Q H(d' );
define( 'LOGGED_IN_SALT',   'c;9;G ]b)i?NA:I[KP*,%--6>j%j&SI=DxG[%-9w!3A],?Y*#r3|gV9OwqtLd45j' );
define( 'NONCE_SALT',       'dc_)bSNF7p{&Nj3eSr.@0t+GvT>)-DR.9.U&CJ71pS:.qiYYjaJSG^RZjE*mj8Zp' );

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
