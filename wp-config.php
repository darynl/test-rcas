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
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', substr($url["path"],1));

/** MySQL database username */
define('DB_USER', $url["user"]);

/** MySQL database password */
define('DB_PASSWORD', $url["pass"]);

/** MySQL hostname */
define('DB_HOST', $url["host"]);

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

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
define('AUTH_KEY',         'Dv5{8=Pqk,|zYA-.d;~Ub_;y]h+`cI6+urF.Y7N}`+$X[ -_Sw*hoqb4F4g`$B7!');
define('SECURE_AUTH_KEY',  'il:m=]9]jWeG7b6O@PJ9f(>0PAuy^$.~enMv6(xtoC*quxUMJy47#|DdW}%`9Mgo');
define('LOGGED_IN_KEY',    'xBxt(A?yxo123e@HJ.gCd!{R&5@<Ny n&ja1!-YN}ne $1lOou0+R3%1L-72Y~Bi');
define('NONCE_KEY',        '7a!),$0Jo/R *UEkTj|rujW-rdp.|_4e(8Uzzs83.4oL},_9GR>l=0}f1*hneBWw');
define('AUTH_SALT',        's/6 Kjv%jsHf/LfjLi!6FMwc/p4H;~<r0}&HL;-UZmSUGPPH<!K6-:9PNqaS s>b');
define('SECURE_AUTH_SALT', 'T)GT6JO+siq?k&dZ`D($|ByH)LliM=Ikk-U}a`Y8Ch^&]&T)o8;|``/?{,6-zS_`');
define('LOGGED_IN_SALT',   '6o)#eR<7%:&-w?Q;y 7)oDp=&ehee%{?c.HccxT5)}z&fvcP{cA{{xQt-0Alq^Ku');
define('NONCE_SALT',       'Pi=2mhi6{f+fh@xg5&&.X+=fzLhoc0s- I1b-!.*pR6B1A*Y}E_+q|mF%}cm%UV#');

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
