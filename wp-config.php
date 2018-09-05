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
define('DB_NAME', 'store2do_lebon');

/** MySQL database username */
define('DB_USER', 'store2do_love');

/** MySQL database password */
define('DB_PASSWORD', 'kagaboelite20');

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
define('AUTH_KEY',         'HM=?9iUs|5+@Qui`Jpn`;}:>bHtp:BpR[={rRZeQ+@G9ty XsI*R`GLHBs~{^|l(');
define('SECURE_AUTH_KEY',  'cJ+bai_i2k_FtNg$1PV/It*V+duNm9ZTxdC(z]^$yL8ms`p7uG.%7]k_MbiME&5>');
define('LOGGED_IN_KEY',    'V:V(J-`zDaj3dUnz;|ZUNrMhZzTU>vm-*URt Wb|sq@ &?}hFA!&VAJ[xeXcNdp/');
define('NONCE_KEY',        'A^rE$w@X0qh3(B-0oDq>5b;f>_P`6-3@><Qnkn6]Kb?l?lUpp0F)%Tywy7Q?/ONJ');
define('AUTH_SALT',        '&R)cpI&;&Kak]QG]%M6j*ez2^=`Yp3h 6 q~I&WqNuOJ99M>Fa>$~S#sB1<TK~@N');
define('SECURE_AUTH_SALT', '!]~wvl+xHl)jOEo0v6PoLkW^:uy3IV3DD/do.1nwtbt.1s.U$!9)-gC<,[d{.Z+=');
define('LOGGED_IN_SALT',   '<UJUY]jn);|C]Ben[2Q0&|hh_As)V*]I`!9m[#=RGt]ihO{;cOxv0z57=vsGrtCx');
define('NONCE_SALT',       '*5&GOA1kxg[jyFexvX&f-Vvq5?ihc0}</*iUsm%M~p.ReAhM+a5*^YUXZmZW;GD.');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
