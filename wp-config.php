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
define( 'DB_NAME', 'theky' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '52Bc?UR$~!AWvT/:nSRWr~BHUjFj+&8_)!Ia3T71swjL<V-lGh=3Yv4fJ!$LEwB*' );
define( 'SECURE_AUTH_KEY',  'C.U.@#bO%Lz5TOr +RX0:AW9COjTd4$8[OV}N7$7tj&EAykhL3n&>xf2&GY~C^-g' );
define( 'LOGGED_IN_KEY',    '}CG9zTeOG`v%V+7t*IPH<lBwVa269[la?v-z:}@fdYhEH,1f%P=)XTOiuvDsRf0=' );
define( 'NONCE_KEY',        'fiV ]AqA}eET$s!&0<aLip20-&U^,{Y,h[,F],Bf%vl@4-AzJ.Ls-nINOr+Io];#' );
define( 'AUTH_SALT',        '-.?Jj}O;/WPg^@h*d6iz4EN?v=QsJGw%9+5wOd?K*~oM>Di)RI?|m_be+29@%*-%' );
define( 'SECURE_AUTH_SALT', 'v4uP,q`tJ+H_&I}?kNpBAZ)g8Vvy:/&#^}yW!.}Eq/C|vZ3OLiG9&`Eg&buwvx-%' );
define( 'LOGGED_IN_SALT',   'Z[cjgg9g]HX{&N2Mhx^s}l9~Z;^Ms!EP{$[&z*G!ic_(,GmA!h<7QjkR{{eoOq-N' );
define( 'NONCE_SALT',       'd?r/HNtkpvxEg9Ns)`Osdv><0bVk]=M p5~uuKt6[>/^ cev*eE PH{!Q~!R@>Vt' );

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
