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
define( 'DB_NAME', 'erick-gm' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Krish@123' );

/** Database hostname */
define( 'DB_HOST', '172.17.1.103' );

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
define( 'AUTH_KEY',         '5Y:v^DgZ:=Wl$:r &Mvi_0g<f!g~$@*j5^VWH!O3)#p0rD*EM/Nz=y %iygWL:r)' );
define( 'SECURE_AUTH_KEY',  'F8[`<DP|}*G$PI7/$v;<:S(&=3k]X :I%N$0AydP%C^VgID5hu!7?&uM(9~p`r5C' );
define( 'LOGGED_IN_KEY',    'SSgD(Ko;vvM.6wH0(*W<bYMH,#1K23^?%,nNGSyl 7)@6nM&0LQmm+pJN,T1T&<v' );
define( 'NONCE_KEY',        'EbbthVX& G7[<$<eVkN>paDJI+zpIL>Lk2FHE-i+@K9x2L&E)zEd:safn9Di$BLZ' );
define( 'AUTH_SALT',        '[.0Vj&P:A<ruX::r#K!-+SQ.d`i%/(g8Eo*0vm]9aV>#=qDte5e<cBqm;I1UTY2r' );
define( 'SECURE_AUTH_SALT', 'MR+{/@sNeLZ}>Usi)HpU}Gcyg1byCCBL4bvZ&|L rGO>m+:F;zx5D8*E8S3O2?+I' );
define( 'LOGGED_IN_SALT',   '(F)=[ma#/:p?+9.HPy3_5~K14{?h[n~2|+3sN2Fbm~9>JW&RVp0/^T8Q9R%6|Q>,' );
define( 'NONCE_SALT',       '!}a|BioGZ_4>D8<g06~_%CPgv_b;F(Na,HFkt]4KaBC)qnVjTuz8U`[IN0c923XY' );

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
$table_prefix = 'gm_';

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
