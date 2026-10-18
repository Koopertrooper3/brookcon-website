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
define( 'AUTH_KEY',          'Zy,:d#+>M4T;=_M:}x]>[C/e13}>!3_:U2PvG?Hl-}HqSw:/[f.ks#Vt^um;PKpi' );
define( 'SECURE_AUTH_KEY',   'Vb v4V[`2I,nD[;f{6;a @%_JTX/6Ch#w`L;aN.0PPPx!Ofp~&A(hchEP8M2UT?k' );
define( 'LOGGED_IN_KEY',     '!2::bcu|BR0^MbGcQDs@=WJ@v/NLgf[rYM;Je1[!V_kWlu!eNSSt&!JN=.$`hogp' );
define( 'NONCE_KEY',         ':{ELuQpL;YL;`Ur S^l]d,Ov2v>[p`IqiGw7z)g36)A%v{vn}}W;EM?;O0{?+>UI' );
define( 'AUTH_SALT',         'cD!qVX We/$0kQ7e(<bgd3ry:9; qtys/Ge{8Br nrhOI^cN[(X5FPl:R|#)HQen' );
define( 'SECURE_AUTH_SALT',  'LQ8MN#qj:tL<}1M*aX~<Rnzj]/_q*9,sW9>r?An5Y Dl58LJn*,vL*,6g=Q-z,p}' );
define( 'LOGGED_IN_SALT',    '%6UH`S|ue,e|X$VugQEK/z?sd~ecUX7PRUhP=NXcu58<keaY1<eBIE]}C|_<lPIK' );
define( 'NONCE_SALT',        'EtAntqdq6xkLw_7irE1j!{-G_tB<,$3xcUgEs.>K{^X3I+r*O}L7|3Q1e{ZHh-&j' );
define( 'WP_CACHE_KEY_SALT', ')o;&]bDI$7&07=>y78KzVZ^z5nYo{4`cc?M|RN_DPH[tJ;l--l3@Y?L`cbnTfQ4Q' );


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
