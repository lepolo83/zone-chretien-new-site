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
define( 'DB_NAME', 'zone-chretien-new-site_db' );

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
define( 'AUTH_KEY',         'wA<%*Ecv(dK-FWIA/Orlxo1y4-=/M<U#0T962}Em5E$zUrDLjMX/>?UlDYll;1Tc' );
define( 'SECURE_AUTH_KEY',  'tc5)0C?LP.H#lb3mdX@3id5>`Wu}EFb@>QAgf)NZU=$E`GN,GDZ|{AS*]s6x.4o@' );
define( 'LOGGED_IN_KEY',    '`L}/_rX?/%t<^$3YWzv8)f/P}a6_o]~Mn@;Pbr{5q_DqqjH%E!>Va?ll##1WkHF|' );
define( 'NONCE_KEY',        'z8ZE_|R`mRMLe4Qlg5EA/GS#R&Z06E) /*}/XJ:BER/Y`vKj|[9r>]Yqa(vJi2]$' );
define( 'AUTH_SALT',        'oiy`#_j)x:VfJ[tqig9T-_}tOSE=p:JP&!SVcTSzliNJl=N;DTs8;lzlrdn_^nk~' );
define( 'SECURE_AUTH_SALT', 'kCk4kr^AriP8AQVW A8Rnrf1&BIi+NBp!|j>xlb$B$}wvx 4Ue@5.Q=+Kf<_HvI>' );
define( 'LOGGED_IN_SALT',   '+BB|7o!j0pJv7@gT6>RN2Y=.Qe)KRN%,2]`w&pyMw0i^B:JGJ}5$/c6Y~FB$.EWz' );
define( 'NONCE_SALT',       ',dAR||?C lE>}H4F+y;2AEG( llp5wmpC+y+j&ZAM=:G4vDQM&?|+b26n4q/kiw3' );

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
