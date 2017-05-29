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
define('DB_NAME', 'wp_ironwolf');

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
define('AUTH_KEY',         'n21*,&QHDf~3E$G.b{!*x{E,?U45=Q:VgniiIs.p2&wm2R6|F.{gz;NTo@HeHham');
define('SECURE_AUTH_KEY',  ',LH9U{0mH/2|!Dp5TU6>o=j-|hfk^Quo5WrF~DxjHr^k{7t`wC5hKmXO@B8`Ba$3');
define('LOGGED_IN_KEY',    '6g (K sAV&5%Kt0c29^<0c6=/%>32CsENgF~=I<A8ubj,2yk2!3vM8]Y%5R9nI1X');
define('NONCE_KEY',        '3B~,O?GBZR{fP`p,3sz(*x]<7:%p]N4+IMdh#4Tk0njMnr^8Y-}snS4nt9+8F5ML');
define('AUTH_SALT',        'R&KG|)u~4pBLf1U$kP&mc`rH7 yQya^S!*watQ0$lXzT2e-CXYFV6+~(ulDN~5py');
define('SECURE_AUTH_SALT', '}NLb:iZaE0!Je01Z,n@pL=^xcLK|%1lh{oWrB{t%oT#yFk3i}9GtL[[}_!@h_6vl');
define('LOGGED_IN_SALT',   'oHN2=+Zu(g|iCE~QfemQlMX)QRrDteMM^L&36S5UO2L0%qk:|EQ2TNNP:/<+yP67');
define('NONCE_SALT',       '=a0@4lCSPH!uMX,yUv<]js9&2]+@60>]X;5-Rl)Jc{6dRXvBheph5m^*p#c6U5>]');

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
