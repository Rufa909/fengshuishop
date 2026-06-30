<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vongphongthuy' );

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
define( 'AUTH_KEY',         '>}>4v4@xNsg<l)/F]&wx%1;}X>(/@J7SbG/0pdkpa(7H`0)]Kof}8m7`_`TG:Bl1' );
define( 'SECURE_AUTH_KEY',  '1dgA3A5T;&oF01]Kny&+I0%0FB#Z:McOyXy]KKaM@GG2-6ig.`lu`udDfS,)=eGo' );
define( 'LOGGED_IN_KEY',    '|p@ulky_YqfQ(EqjWmkl%o:z4X(i_M[|=BDBi=kV0FGBpl$XBY9JW@[&I,<HEr$~' );
define( 'NONCE_KEY',        'SXe=3-]uS&A^lSyr_5hl(?HpAI*8< |:Yvc:j=S@p,F(/C4@etF|!9r8R)KQn{U1' );
define( 'AUTH_SALT',        'Wpnu7^SXA!,3QkT*g,VyaVay>6Zj?K=AtDgt!c6++FgZmm7u~WNjD(B$r)d9<O}.' );
define( 'SECURE_AUTH_SALT', '}6DuvWyDB1Z_^n/uYq6tRDA As3)a?U>/N[AwBj(mT`[%7|f`t(&<#wVL:vIot=5' );
define( 'LOGGED_IN_SALT',   '+9F>t}>[gxs[sAkIGr[>5Royys>bGo Kg32Q))*Rp|c(aMn,vm1A;Om]1!am?P8:' );
define( 'NONCE_SALT',       'gw}>>@U?,%aC7/k(W8Bn dg0ub=5(YChU/vPt+;mW4+[2R]Qxv]d&(BP.TwX)R/O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
