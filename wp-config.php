<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'customwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~Yrnc0JM|X{J9n$ _XSt%b5aWQnBmZ~0j.W|C+wa^MIG>x7.kT^p(_xI_[Kivd|C');
define('SECURE_AUTH_KEY',  '#;1FIX<|<4HnvJbr]ERTM+FdFuB4?NeG^VA5{1MX-2?+h!&8|y+:dhv)CaXE9|]-');
define('LOGGED_IN_KEY',    '-@Ci8f.$/wyv;<txtjY^pLD>U1FSO=Es+s|}V!Y+ U1+t$4To,~03Ngp</#tA*7:');
define('NONCE_KEY',        '?o6<bzT(hHSofO.B2H>tuCt8_4-o{1,;6QvNDz:+5+p6IV^+iL@ZnC0xjrvj?hJ#');
define('AUTH_SALT',        'o7;6?+OX*Z1-P=kc]|Y g`o-c9`dgmPabPv?=vUuDx:EI_lN R8$+ eu- 0K!YD%');
define('SECURE_AUTH_SALT', '_uoyQS)iGM`A^n2(p}B=74`MEI6dwBSshSizn]y)i.$|r-+YuYIORb,iJ5+GU/Xu');
define('LOGGED_IN_SALT',   '*-O=nvCDmL8BluIT|C4tWrk]w3:Y4P!3@X axOd o1%8%N>1NsD4!l3g[f39&#8]');
define('NONCE_SALT',       'RVj>P7Xx,i>@RSoQe>L{Ct(4iKyTo-g1Qq_&h07r;+4u|;`jEdG5lODItBD@1%F(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
