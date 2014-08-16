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
define('DB_NAME', 'Nebula');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'JkVaBzDq9jFwJ4yJ:{*Xo@:Wrh2SAVRR~j#c&u!Kw-.e%wup,P`OPYNm*GRCy,IZ');
define('SECURE_AUTH_KEY',  'T+|+@y`zn*fBRTKUd~HRxv[YKn@1axW;7w>G4y,}58Tjb)H4]-3(ae)hu#=y>2`5');
define('LOGGED_IN_KEY',    'Qh!A=-4.(2$5&y:i0u/0.zyHAkuA{QsRq^` G=&-ZH0:q!U>`Ay<$rt):`13>e,_');
define('NONCE_KEY',        'YN*XELKQxcNL0TkyB er(ob>tT#dKzZ9x `W1ZwLu/-e91-jY^~S^+5kv>.2u-PH');
define('AUTH_SALT',        '=^gb|mU  BJDtJC@pk`[#fmY-g~{>{A6x3?HTJX^k:TlaN[zt,1U|-giDE$-wJ[r');
define('SECURE_AUTH_SALT', 'iPpF%NvGzy%QvBn.C!:|ca7T|9)- FX*g*o9|4<A:?Xvl-S7$_+J1(DC04N/$0~.');
define('LOGGED_IN_SALT',   'pujweR?|XABLi}h2R4|WT|U6H(<4<0j&7%Y Adb#},aqFBgq+;idRzTzf8)3=QD_');
define('NONCE_SALT',       'tZ-EG<4uBYa5LsGtR7aK=QQpciu>c^9^n{VWs|sTWM_-l611(5`tnnVlw*pQdAY.');

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
