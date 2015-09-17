<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'foxandfancy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/=b|Lm|xzU)+dOjG@ln+S`&0w-NhaTZs|kE;W6Li=d7Ttjbt/pI0<Lj DLtS?Fb)');
define('SECURE_AUTH_KEY',  'rO^V>mmA_up!d5VP&:d?G}|q5E4W`%XT+_a4ahlaMbuJzC*m,~G6`~qcx uwIVqn');
define('LOGGED_IN_KEY',    '+!-og$+i%#;1sT!U+oFkV~W7G/$+]zgN+(uu3F6*|~:**Y$P&O)Nt:.L%HK![NS}');
define('NONCE_KEY',        'dt$UFzX0/i 6%B5*:&uLj-X:{-g>/EkOT,_*{89qLv!SUFlcI2D_scBgAXI!QI8p');
define('AUTH_SALT',        'MsI:|@mZHPob<hD(K%hiB3yp*._Yyl4S#8sG|9;+Nx#%YHV.s&K*CKR-8nEH 57X');
define('SECURE_AUTH_SALT', '/5g1uB+{2n(qr-/y-^G*`3mVgT{cW=<q$U:r?~U<n<M<o/H jxlS_J6`LZH9mhEb');
define('LOGGED_IN_SALT',   '4#nOR}Q|{{4[<<p(Z+^z]Jk|?2Hd^{|IIzslM9y+:@TD;yk|#lh_p=:)iUUR~,j}');
define('NONCE_SALT',       '*Uj-/.(HZIpW-hE4.DdujtVaatJB|MG}h(Jrd)6.P^1gn(>v&8c`a-m~p)!Q3hyw');

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
