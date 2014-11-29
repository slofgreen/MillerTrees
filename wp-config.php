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
define('DB_NAME', 'miller_trees');

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
define('AUTH_KEY',         '&gu42 p2*k-GBE|8ktHpS0tu?-(xJ|kauG7F y+|D~B[S3UQh3^Z&zc/O3>l8M/;');
define('SECURE_AUTH_KEY',  'yCW|4n Qt+0ZfpIJ`+[BgL|nQ%mWu2}.:BzRo{y|B,eO2}C3<SF|9/Q ^<WE[|kw');
define('LOGGED_IN_KEY',    '~t;7aUs$+i`GI$<49b_>^d)*j ghr=H,u3qD2Q/ hg ^=djG<V+y-8w^&5b%tsc3');
define('NONCE_KEY',        '9x#N2+z1u2bB_M+toZ!H0Ok9G6yi5gqUWDO:!8ifHp iSG^|il/H.|r)&u3r%IN~');
define('AUTH_SALT',        'EO#7ZFJQ!a@Wy^xFulm(xj3N@R+p:]-u|+Ig-fOO^Ie a)/X/)}-|WoVUL8UrDvj');
define('SECURE_AUTH_SALT', 'Jaq#c*G 2z1M3j8*#KHnv!7xV[{8a>wrbFcbe-H7 DUMZ/o<iNkqAYQS+AJ/:33y');
define('LOGGED_IN_SALT',   'v+M[fp|]]|L,]ESzl`=E=&FHt|-N>h8W-@9/L6yDS_kx*f><}RKr+T<)Y+sv%TjA');
define('NONCE_SALT',       'A!o&CJ7H/n!T&6hC%m 8-I&E]m9a3=o$xXoHy|32K+VmHTUT<F)vK|B+1d-l|#LD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
