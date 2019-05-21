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
define( 'DB_NAME', 'loneson6_juniper' );

/** MySQL database username */
define( 'DB_USER', 'loneson6_juniper' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P1#-;rf21(MC' );

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
define( 'AUTH_KEY',         '[(C`gMQ<#k*@hW4.g}RQI_<>I%4;spgta0j{WuuxBf<Lk ^j+Jw5i82vDowiWw0T' );
define( 'SECURE_AUTH_KEY',  's!m6<T<Rn:Cng2>v6|5~xSbOVs=/)h3<JRcK.h-;xhBl&Bk{pi2TeWI)ZrD_I`ID' );
define( 'LOGGED_IN_KEY',    '!?JC}68&`b<p8b.Nu?{adAmGg]3v_1`fU4%36kHIKS?lOKXB{r*w!U:VM_56`Eq&' );
define( 'NONCE_KEY',        '/ ~nHl2B dnvei;x>%CRak2hW~?%x(]bU; WQt X]b8z*0{NQ((IR<g}R2lW-Ig!' );
define( 'AUTH_SALT',        'cb4HE!qjR! =Uxl8^ZOGN?O;eY:g4;a5MQwUu;ke=z[Mhj8F^I@?Rnv##Xgm!WHv' );
define( 'SECURE_AUTH_SALT', 'qo{|n-;msf7Zn&h@BJEg:d|Kmg{85RIrJie /Tmfi(8/H#N&2V&20v0mc`>o,HH ' );
define( 'LOGGED_IN_SALT',   'H[*+EH?9K6m<(*#%yZC=qgNi./4;t3GA}]p.(@7<X&jqAWpvuF.}NO[jPy[#f4/o' );
define( 'NONCE_SALT',       ')eD*tLYyg|HK~f+?DOJ[oz/7L5zn4IBx^W ))hxk#:JE$iN85@]w$o[[x}Cx/$OW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'juniper_';

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
