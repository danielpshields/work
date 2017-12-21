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
define('DB_NAME', 'loneson6_wpbluemonday');

/** MySQL database username */
define('DB_USER', 'loneson6_blue');

/** MySQL database password */
define('DB_PASSWORD', 'S4QT~w(XdnLF');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'it`Rv4cza^(eVN#]N>`M]X;qHFkM}2^haqbm5afoB+KfA4kGpStNfH>8x;)8G*P-');
define('SECURE_AUTH_KEY',  'HK=<8d^9GY=TsHIz==BF.VKLnQA&oziM[y)J<IxK1KTK,T}`l!Zl^z]0/k{GePm!');
define('LOGGED_IN_KEY',    '}rUq}5US>NNNOK. `qw+v2t9_P5`h5rZwk@s8;{V*Z*,bXDk6y@HAM?*djV|J[F|');
define('NONCE_KEY',        '4cI:zoupyccI)lzk/4I{F<H*|8q!j,k]iW4]UcXEa*QIcie@Un-U(Sssm.wc(MD{');
define('AUTH_SALT',        ']D.q(OT0]p;h4y knl$X07u^{,Uf4<6auO~+WqgiZd-p2Gp4^;b4]iO*B-a-[w+P');
define('SECURE_AUTH_SALT', 'R5Ujt1|4J)Wl_SBih>Eg[rcd^Odw>}QO_|ko|JPN|1ljOz,32)#bIoy*^-WBnB=q');
define('LOGGED_IN_SALT',   'OKMOHY/r%zn&AIu<tO+,3np =KB V G<n`6/</gT:V`R54k8Cs`-J,FWN5MG N6A');
define('NONCE_SALT',       '`q<kT$v}x&~[$z1-bLUEX%5@->xkAGRntk(_}shDmg]=/fTP:zkKw@r0J&+.D}lS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'lonesomepi.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
