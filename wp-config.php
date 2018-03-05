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
define('DB_NAME', 'newco9fx_wp659');

/** MySQL database username */
define('DB_USER', 'newco9fx_wp659');

/** MySQL database password */
define('DB_PASSWORD', 'N6R-pt]S91');

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
define('AUTH_KEY',         'kqfuggnrcvbwpqqtf8cvj6ga5yee1qo2y9qxpeszpk6b8oopqhkcsxqun3zzd19x');
define('SECURE_AUTH_KEY',  '9l7pmettdugqc904ugx3mbetwoycbr4hhmorjhvdlmgt1t7ibbox6fchhkz0bftz');
define('LOGGED_IN_KEY',    'xwg2knkvpxzzea8rw23vcsxqaf2wqb2orgefkhbe4yu7mxhgwl8i0appc9cnai8k');
define('NONCE_KEY',        'aszchsbo0sisb03e25svbqkos9xfswszh5zk9sj4mlh2w9iffs07mkbifmqeotr9');
define('AUTH_SALT',        '29zekcyqvvubeqdxbx1azb5buoppk7dtozftxrhafisviw89deihjp6egexdk40i');
define('SECURE_AUTH_SALT', 'dz90hotsolpin0jlu2ixdmasog7ae6issevcm2twy3raybfbzht6fxuline8i8xv');
define('LOGGED_IN_SALT',   'vpuwust1fdjyix3j2g0ad5hc7myuekxax4d4okeckfsyiogcrb1nka5p6qhabmbj');
define('NONCE_SALT',       'i2gd7fmjw1rbpacsuxmurajqnvbfaokptvxl1xdnyydhbs0ph4ttiduews2rpxso');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwr_';

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
