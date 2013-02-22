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
//$url=parse_url(getenv("CLEARDB_DATABASE_URL"));
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', substr($url["path"],1));

/** MySQL database username */
//define('DB_USER', $url["user"]);

/** MySQL database password */
//define('DB_PASSWORD', $url["pass"]);

/** MySQL hostname */
//define('DB_HOST', $url["host"]);

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'b{4a$dK:L/g]-Ko.fkDS:+dSIQda}Premr/0UZF2+(xGfuU8E$Pct<8H@$v; 2Ky');
define('SECURE_AUTH_KEY',  '{OsxOs}y [Yp8P{ZV6rP3/!@cy!;j Stpe5VRszsbR4YET^@*C1~YMR3LK^`8PS=');
define('LOGGED_IN_KEY',    '=A*dPjF!_k$U1i0+2=QJk.v$$-6R|Uy/wLZ$<V<=X^#?Q@f4Vh<UG6!mO|i&5,0z');
define('NONCE_KEY',        'Xu}-*+0EVd(4l/RzqcA>5Y=yuooQ~jWQN+<ccF2c^|0=y|VA:uso~J>RKFuc{oQ)');
define('AUTH_SALT',        'T%BS9qi]Bg3,LXq76X4]kZ@![hKG[;Dk&vt$)[3}Rqs22?$VGIXq%n_?$S3+tnM:');
define('SECURE_AUTH_SALT', '>|.m.HB6OWZT#`F.#$N5<3<rkc/}RoS1]h{OQ8L@GdgHF6V4v6e}+lww6,TjhbeG');
define('LOGGED_IN_SALT',   'WZc4^@P2@QE*Elx(w$LL$kVviX$Acuu{(Po<$~fM|FbK~0y]{BD<=>2V|G8Q*;SU');
define('NONCE_SALT',       'z%||:UH8%ueE*#7)m2`tn7^3f}Hvi3DH>l0odX,XIp)Q>.Ob7[$b^+}~:qTGj<rp');

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
