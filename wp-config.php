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
define( 'DB_NAME', 'pinnwebs' );

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
define( 'AUTH_KEY',         '7jhC>#iK7HO`O4dR|#jNNF?=1o?e,ZrhOPK0toGVoWG8(0Q2whbxoBBLo;|Yk4)l' );
define( 'SECURE_AUTH_KEY',  '^F#7>(W~yz:={wX(gqL@oZX0uuE{=SS=FRQuD;!yC>hi0#> o>Xwc~X=G+GqKQ]k' );
define( 'LOGGED_IN_KEY',    'ND:F;P*0F_{[)J!-o7-=4?3`DAW.:6L08,rh^K3-}*xe=$[~;Q]/?+`fL!P:C[2,' );
define( 'NONCE_KEY',        '~:~eW5&|G3Ct#6&[oDG.>]mh2:@Qqt4,lXp~2SDS|2tLd p`p_`I&wHj.~?y$]8w' );
define( 'AUTH_SALT',        'z+xl[OM>uFTX|F%C!&/`&~B99|Xi8/)T7FQPDr|LjipN>l*n#+j>3`;MfI7NH.DX' );
define( 'SECURE_AUTH_SALT', 'a1yC|%M3kMK`e0o,9mFj{#Ea.G<cV9n:%=_nMR%s$?tfR2k4eC|oN>/3cZ2CO>C3' );
define( 'LOGGED_IN_SALT',   'L&C^O5fP7Z$zTsEN/vJ5><gr~r5%Qy_Dl}4l+O6*ZP@WPI:)N{t7&S{k{m(*Pbeo' );
define( 'NONCE_SALT',       'BnYu~,5z@<5Vl]>RBy7]qL#[KV,-sMmS{C),$1zT./!Re#}@D8 tMvycunZJ bM3' );

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


