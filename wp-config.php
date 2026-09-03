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
define( 'DB_NAME', "dblogbcgxyld9g" );

/** Database username */
define( 'DB_USER', "upsprdczivvjo" );

/** Database password */
define( 'DB_PASSWORD', "CheMonk2023!" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'JqOzxwi<!PlF59Wz4EwB[C7.;1!G,)B ;(vb;}:~^~~7HCc&W.,O7R@)^G<XGsi?' );
define( 'SECURE_AUTH_KEY',  'vwLW)h4c2=9XxhV;Ay^w6PhP1])mg]CB}e~^BO|_HAmO+>b1Z-{*S.%PD -96n~v' );
define( 'LOGGED_IN_KEY',    '8=vc>of9_#,<-479=!~KE+]0Fw%W9},cz/$^07Y!H?-:O1&5mdI=og1!Z528$m|_' );
define( 'NONCE_KEY',        '?;]+U]~b%4+EuR$Zm05trU&7BN9hG2-]_YXekMw82->Ilu8%HD{H-cKS2gFUV`iv' );
define( 'AUTH_SALT',        '*a6S*H;K,s:e!y{Rc=/-{rsF6aAYak%{pW9KM !35Ht%65EZWO;!0tA=P8HY`#|[' );
define( 'SECURE_AUTH_SALT', 'Mm7bNqM661T<#L4gqX-ja)8c4G-arpyhe/2`xC1E,j/s6CWY/( *2GZjTV?+3}o[' );
define( 'LOGGED_IN_SALT',   '^H1BnmF%{LW~Hg^MX<*hB?JTO4&(My|oS_Y2@SRz6<~B)8r@8v0CFima+xJQCHd8' );
define( 'NONCE_SALT',       'Z#`nr4H=1z!RG8xAIF#JYG/kNeW+INn+<jB }YO)8q?SN* 9oZ4Rf]at|j@z=!~t' );

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
