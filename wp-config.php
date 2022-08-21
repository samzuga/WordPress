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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'AVNS_hrlfhOIanK8lpVVaWMV' );

/** Database hostname */
define( 'DB_HOST', 'db-mysql-fra1-zug-do-user-11112402-0.b.db.ondigitalocean.com:25060' );

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

define('AUTH_KEY',         '~4!V0f5m| 7o/4d{Y(TlO3868~]~I`T*=^q>5nCW(Tm(<K__]&N>73.4xn%b@[jW');
define('SECURE_AUTH_KEY',  'V1`q+;*Z&F%ugJ+y@G{Nt!w<DfCDW-ei$c:>t^`.YqEb[A -uu-JR8Ez6]_<pW9M');
define('LOGGED_IN_KEY',    '%Tsn+{%drST,|K)MH<*NB_ep]-P]Nq1$uc.j9-K1Y,/<|mtnawWsy4!0B/=-sZU(');
define('NONCE_KEY',        '(j>D@1gbAU?Z<LkBAU<;Yg;-SklJGpOt0ubm3x/+WkEy.+jA{e9U&m6vEt?v|{Y|');
define('AUTH_SALT',        'd tjQ]hWqu3b_8ng4ASlW |E;OCIzDH2zgD-4@[d5Y-YM/$:R|665[|[2+02Y22U');
define('SECURE_AUTH_SALT', 'jj`Yziaa_?sZ*zLG@(?F/-uk4#%b8_{LEED(TW;!BDuZ+|+Zm.fX 5cCXJ3m>)yK');
define('LOGGED_IN_SALT',   'xU2!fZupm0cr L-(cVMqD2%|E=EOmf|5&g!:kou-((zq<>Jf[Q6V,>w8+gE(NcZ6');
define('NONCE_SALT',       'EvXI@.n4!00-0 Pm|x})?w#egc5eRvmJ%Ff-N-wLAWe|E}/DY&yDLC +y$gL0`,!');


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
