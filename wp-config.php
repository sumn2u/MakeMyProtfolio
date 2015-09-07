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
define('DB_NAME', 'itcrews');

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
define('AUTH_KEY',         'T?s5b2MKlvyb?hoC/ 5`6=>9mB&0D!.M@[*+j|<CmVQhT+I4FYUu;a-^1j6a:t`v');
define('SECURE_AUTH_KEY',  '(%R~`Azsi)F#$ XgmOTJE@(+M=0:.a0^5Y(+vr(M3t&U,Yno7qvTfX{Gkb(Q `=R');
define('LOGGED_IN_KEY',    'y;gsDN0Rs0]1:jZbI%tGL>! q#hC;_LEYl!$QM:]W[eW^vwYDT?6O<{`5B.(]45[');
define('NONCE_KEY',        'VS?[n9&Ik,,o*Yk.(n-H$f&IB_r?SRV]qbeI?LkIXWYH#xSiZ2 4BHI>e0FwfXPF');
define('AUTH_SALT',        '?041j9A4X6_=TTRj,{P/+_:ay=`Xd5rE8K}FzuEjSD#M{)+JtOYXKsfy[_nw(a#,');
define('SECURE_AUTH_SALT', '!|%,)`PyEpkiHI9Cp^<(GO)} CpQTHC{TcK9p!eTbK^G.5,LUuiMh1H}C,2k$kuc');
define('LOGGED_IN_SALT',   'a{.bvUd+wKkoTjTnRq2tJT9>t,SjAC)Oi4X-l]j$0fK^}L.cM-[hL4j26cDIFI}=');
define('NONCE_SALT',       'B%P$EHhU0*W*mk;]@?[h#Cn`whq#G>uAMtP@M%g7CJG%2vg$#jnSNpR,=0jnSy0A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'itcrews_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
