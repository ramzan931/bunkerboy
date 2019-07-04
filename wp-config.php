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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mystore' );

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
define( 'AUTH_KEY',         'd!Cp{}F9pcxr1LVF7R V>J7=SqAMR~tEChYALV(2U_Bexg&(>~xutr^ fcseB}Pd' );
define( 'SECURE_AUTH_KEY',  'R1]h[nGbe9[j ;VehWT@kl8Daa11wUfkd:wF_SIK+cX:>et+LK+6kE6JGP*fcIzy' );
define( 'LOGGED_IN_KEY',    '}s)xB/!&?WNFNClQmOqZ Ah8^6ns>>]?W+o0X8^y~QOXPbH3SkHm3)M@dRp{S0 O' );
define( 'NONCE_KEY',        '@RI.VhN4Y3ysB!.KVU:Qj+YYnXixk>=KVS/Z2&M:kp(HWDI#E>):M%]1V%=2p3T?' );
define( 'AUTH_SALT',        'SLA#F=>^2Sg+;6,=g15TM{d>S3$nRTqdx`on21VdOx[Hb.EGju5k?lnS].8z5Lwd' );
define( 'SECURE_AUTH_SALT', '@wB<nQ$Lvtra1j?0SX2jJ/EI9dQC_99Y2_+s[h2E?>;N*^Uokfm<DTFP59$ka@an' );
define( 'LOGGED_IN_SALT',   'Rr3O;Nnv2?7Y@|6tqT[*t6izPjQSk0 %C52<#Qq~^E)x$Yqkg&}-Ml_2q$iD.vP ' );
define( 'NONCE_SALT',       '3Y1NaPgr22.tUw)/YJ~rZ&zCfq|H(UgLG*6t,>~X6kA&;4qTy+FfvZj ]x},?:J>' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
